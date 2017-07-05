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
        },
        click:function(e){
            var $ele = $(e.currentTarget);
            if($ele.attr('data-redirect').trim()){
                return window.location.href = $ele.attr('data-redirect');
            }
            return window.location.href = `/index.php/activity/p/${ $ele.attr('id') }`;
        }
    }
});