
window.Echo.channel('laravel_database_post-created')
            .listen('PostCreated', (e) => {
                console.log(e)
                console.log(e.post)
            })
