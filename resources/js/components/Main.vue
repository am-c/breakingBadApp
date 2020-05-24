<template>
   <ul>
     <h1>Breaking Bad API display - Annemarie Cates</h1>
     <li v-for="character in apiData" :key="character.id">
       <vue-flip>
         <template v-slot:front>
           <h1> {{character.name}} </h1>
           <div class="img"> <img v-bind:src="character.img" /> </div>
           <br /><br />
           <strong>Occupation 1:</strong> {{character.occupation[0]}}, {{character.occupation[1]}} <br /><br />
           <strong>Birthday:</strong> {{character.birthday}} <br /><br />
           <strong>Nickname:</strong> {{character.nickname}} <br /><br />
           <strong>Portrayed By:</strong> {{character.portrayed}} <br /><br />
           <strong>Status:</strong> {{character.status}} <br /><br />
         </template>
         <template v-slot:back>
           back
         </template>
       </vue-flip>
     </li>
   </ul>
</template>

<script>
import VueFlip from 'vue-flip';
export default {
  name: 'Main',
  components: {
    'vue-flip': VueFlip
  },
  props: {
    apiData: {
      type: Array,
      required: true
    }
  }
}
</script>
<style>
h1 {
font-family: Arial,sans-serif; 
  font-weight: bold;
  font-size: 1em;
  padding-top: 5%;
  padding-bottom: 1%;
}
img {
  width: 50%;
  height: auto;
  text-align: center;
  margin: 0 auto;
  user-drag: false;
  border-radius: 5%;
}
ul {
  list-style: none
}
li {
  display: inline !important;
  font-family: Verdana,Geneva,sans-serif; 
  font-size: .8em;
}
.flip-container {
  display: inline-block;
  padding: 2%;
  text-align: center;
}
.flipper {
  width: 300px;
  height: 300px;
}
.front {
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 5px;
  box-shadow: 0px 10px 10px #999;
  background: #fff;
  color: black;
  width: 300px;
  height: 300px;
  overflow-y: scroll;
  position: absolute;
  top: 1%;
  left: 0;
  display: block;
}
</style>