const app = new Vue ({
    el: '#app',
    data:{
        logo:'./dist/img/avada-music-logo.png',

        isShowDrop: false,

        menuElements:[
            {text: "Home"}, {text: "Meet the brand"}, {text: "Live Dates"}, {text: "Latest News"}, {text: "Albums"}, {text: "Fans"},
        ],

        festivals:[
            
            {date: "17/08/2020 gem festival 2020 anakalia, georgia"}, {date:"24/09/2020 groovefest dominical republic"}, {date:"31/10/2020 oasis festival 2020 marrakech, morocco"}, {date:"07/11/2020 moga festival - essaouria, morocco"}, {date:"10/12/2020 envision festival - uvita, costa rica"},
        ],

        showAccordion: false,

        accordion:[],

        menuFooter:[
            {menu:"Home"} ,{menu:"Meet The Band"},{menu:"Live Dates"},{menu:"Latest News"},{menu:"Albums"},{menu:"Fans"},
        ],

        copyrightEl:[
            {copy:"Copyright 2012 - 2020"} ,{copy:"AVADA THEME BY THEMEFUSION"},{copy:"ALL RIGHTS RESERVED"},{copy:"POWERED BY WORDPRESS"},
        ] ,
        
        socialIcons: [
            {
                url: "https://www.facebook.com/",
                class: "fa-facebook-f"
               
            },
            { 
                url: "https://twitter.com/",
                class: "fa-twitter"
                
            },
            {
                url: "https://www.pinterest.com/",
                class: "fa-pinterest-p"
            },
            {
                url: "https://www.youtube.com/",
                class: "fa-youtube"
            }
        ],
       
        
    },
    methods(){
       
       

    },
    
    mounted(){
   
    }

})