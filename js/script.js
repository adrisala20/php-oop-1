const {createApp}= Vue;
createApp({
    data(){
        return {
            movie:[],
            apiUrl:'server.php'
        }
    },
    methods:{
        getData(){
            axios.get(this.apiUrl).then((res)=>{
                this.movie=res.data;
                console.log(res.data);
            })
    },
    computed: {
    },
    mounted(){
        this.getData();
    },
}
}).mount('#app')