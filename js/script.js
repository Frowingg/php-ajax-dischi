var app = new Vue(
    {
        el: '#root',
        data: {
        movies: []
    },
    methods: {
        getMoviesFromAPI() {
            axios.get('http://localhost:8888/php-ajax-dischi/api.php')
            .then((response) => {
                this.movies = response.data;
            });
        }
    },
    mounted() {
        this.getMoviesFromAPI();
    }

}

);