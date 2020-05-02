var app = new Vue({
    el:'#app',
    data:{
        itemList:[
          {
            id:'1',
            itemName:'松阪豬肉飯',
            imgUrl:'松阪豬肉飯.jpg',
            price:'120',
            count:'1'
          },
          {
            id:'2',
            itemName:'泡菜牛肉蓋飯',
            imgUrl:'泡菜牛肉蓋飯.jpg',
            price:'150',
            count:'1'
          },
          {
            id:'3',
            itemName:'香蒜豬片飯',
            imgUrl:'香蒜豬片飯.jpg',
            price:'90',
            count:'1'
          },
          {
            id:'4',
            itemName:'日式關東煮湯',
            imgUrl:'日式關東煮湯.jpg',
            price:'60',
            count:'1'
          },
          
    ]
    },
    methods:{
        handlePlus: function(item){
            item.count++;
        },
        handleSub: function(item){
            if(item.count>1){
            item.count--;                
            }
        },
        handledelete: function(index){
            console.log(this);
            this.itemList.splice(index,1);
        }
    },
    computed:{

    }
})