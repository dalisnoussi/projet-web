var cars ={
    suv:['La marsa','Carthage','La goulette','Lac de Tunis','Cité el khadra','El menzah','El omrane','Beb bhar','Le bardo','Bab souika','Ezzouhour','Medina'],
    sedan:['Kalaat andalous','Sidi thabet','Raoued','La soukra','Ariana ville','Mnihla','Cité ettadhamen'],
    hatchback:['Nouvelle medina','Bir kassaa','El yasminette','Cité taamir']
}


var main = document.getElementById('main_menu');
var sub = document.getElementById('sub_menu');



main.addEventListener('change', function(){

    var selected_option = cars[this.value];
    while(sub.options.length > 0){
        sub.options.remove(0);
    }    

    Array.from(selected_option).forEach(function(el){
        let option = new Option(el, el);

        sub.appendChild(option);
    })



});