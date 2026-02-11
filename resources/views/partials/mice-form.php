<div id="mice-app" data-data="<?= htmlspecialchars(json_encode([
    'action' => '',
    'privacyLink' => '',
    'event_types' => [
        'first' => 'Первый',
        'second' => 'Второй',
    ]
])); ?>"></div>

<!-- TODO: remove on production -->
<script type="module">
    import RefreshRuntime from 'http://localhost:5173/@react-refresh'
    RefreshRuntime.injectIntoGlobalHook(window)
    window.$RefreshReg$ = () => {}
    window.$RefreshSig$ = () => (type) => type
    window.__vite_plugin_react_preamble_installed__ = true
</script>
<!-- TODO: remove on production -->

<?= vite("resources/js/react/mice-app/index.tsx") ?>