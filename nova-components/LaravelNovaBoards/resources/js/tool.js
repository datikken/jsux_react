Nova.booting((Vue, router, store) => {
  router.addRoutes([
    {
      name: 'laravel_nova_boards',
      path: '/laravel_nova_boards',
      component: require('./components/Tool'),
    },
  ])
})
