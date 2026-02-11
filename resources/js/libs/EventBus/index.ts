// eventBus.ts
import type {Events} from './types';

class EventBus {
  private events = new Map<keyof Events, Set<Function>>();

  /**
   * Подписка на событие
   * @returns Функция для отписки
   */
  on<T extends keyof Events>(
    event: T,
    callback: (event: Events[T]) => void
  ): VoidFunction {
    if (!this.events.has(event)) {
      this.events.set(event, new Set());
    }

    const callbacks = this.events.get(event)!;
    callbacks.add(callback);

// Возвращаем функцию для отписки
    return () => {
      callbacks.delete(callback);
      if (callbacks.size === 0) {
        this.events.delete(event);
      }
    };
  }

  /**
   * Подписка на событие (один раз)
   */
  once<T extends keyof Events>(
    event: T,
    callback: (event: Events[T]) => void
  ): VoidFunction {
    const wrappedCallback = (data: Events[T]) => {
      callback(data);
      unsubscribe();
    };

    const unsubscribe = this.on(event, wrappedCallback);
    return unsubscribe;
  }

  /**
   * Отписка от события
   */
  off<T extends keyof Events>(
    event: T,
    callback: (event: Events[T]) => void
  ): void {
    const callbacks = this.events.get(event);
    if (callbacks) {
      callbacks.delete(callback);
      if (callbacks.size === 0) {
        this.events.delete(event);
      }
    }
  }

  /**
   * Эмит события
   */
  emit<T extends keyof Events>(event: T, data: Events[T] = undefined): void {
    const callbacks = this.events.get(event);
    if (callbacks) {
      // Создаем копию, чтобы избежать проблем при удалении колбэков во время итерации
      const callbacksCopy = new Set(callbacks);
      callbacksCopy.forEach(callback => {
        try {
          callback(data);
        } catch (error) {
          console.error(`Error in event handler for "${String(event)}":`, error);
        }
      });
    }
  }

  /**
   * Получить количество подписчиков на событие
   */
  getListenerCount(event: keyof Events): number {
    return this.events.get(event)?.size || 0;
  }

  /**
   * Очистить все события
   */
  clear(): void {
    this.events.clear();
  }
}

export const eventBus = new EventBus();
export default eventBus;
