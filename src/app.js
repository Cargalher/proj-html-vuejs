const app = new Vue ({
    el: '#app',
    data:{
        logo:'./dist/img/avada-music-logo.png',
        currentItem:null,
        menuElements:[
            {
                text: "Home",
                
            },
            {
                text: "Meet the brand",
                                 
            },
            {
                text: "Live Dates"
            },
            {
                text: "Latest News",
              
            },
            {
                text: "Albums",
                
            },
            {

                text: "Fans"
            },
        ],
    },
    methods:{
        showDropdown() {
            return this.menuElements
        },

    },
    
    mounted(){
   
    }

})