import Vue from 'vue'


window.Echo.channel('laravel_database_post-created')
            .listen('PostCreated', (e) => {
                console.log(e)
                console.log(e.post)

                Vue.$vToastify.success(`Título do post ${e.post.title}`, 'Novo Post')
            })
