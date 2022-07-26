var app = new Vue(
    {
        el: '#root',
        data: {
            discs: []
        },
        methods: {
            getDiscs() {
                axios.get('http://localhost:8888/php-ajax-dischi/api.php')
                .then((response) => {
                    this.discs = response.data;
                });
            }
        },
        mounted(){
            this.getDiscs()
        }
    }
)