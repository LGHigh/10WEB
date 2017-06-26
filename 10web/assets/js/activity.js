new Vue({
    el:'#the_act_bodys',
    data:{
        act:[]
    },
    created:function(){
        this.fetchData();
    },
    methods:{
        fetchData:function(){
            var vm = this;
            fetch('/index.php/api/activity/getAll')
            .then(e => e.json())
            .then(function(r){
                if(r.Flag < 0)
                    return alert(r.Content)
                console.log(r.Content);
                vm.act = r.Content;
            });
        }
    }
});