<!DOCTYPE html>
<html>
<head>
	<title>VUE JS</title>
	<script src="lib/vue.js"></script>
</head>
<body>
	<div id="app">
		<h1>{{message}}</h1>
		<h2 v-once>{{datatetap}}</h2>
		<h2 v-html="html"></h2>
		<h1 v-once v-html="message" v-bind:class="class_h1">{{message}}</h1>
		<?php //<h2>{{ counter }}</h2> ?>
		<input type="text" name="value" v-bind:value="counter">
		<button onclick="vm.increment()"> + </button>
		<button onclick="vm.decrement()"> - </button>
	</div>
	<script type="text/javascript">
		var vm = new Vue({
			el:'#app',
			data:{
				message : 'Hello World',
				datatetap : 'Tidak bisa diubah',
				html : "<span style='color:red'>Data Html</a>",
				message:"<span style='color:red'>Hello World!</a>",
				class_h1: "title",
				counter:0,
			},
			methods:{
				increment(){
					this.counter++
				},
				decrement(){
					this.counter--
				}
			},
			beforeCreate(){
				console.log('before create: '+'message = '+this.message)
			},
			created(){
				console.log('create: '+'message = '+this.message)
			},
			beforeMount(){
				console.log('before mount :'+'el ='+this.$el.textContent)
			},
			mounted(){
				console.log('mounted :'+'el ='+this.$el.textContent)
			},
			beforeUpdate(){
				console.log('before update :'+'el ='+this.$el.textContent)
			},
			updated(){
				console.log('update :'+'el ='+this.$el.textContent)
				if(this.$el.textContent == 'test'){
					alert('berubah');
				}
			},
			beforeDestroy() {
				console.log('before destroy')
			},
			destroyed() {
				console.log('destroyed')
			},
		})

		vm.$watch('message', function (newValue, oldValue) {
			console.log('Var message diubah dari '+oldValue+' menjadi '+newValue)
		})

		//vm.$destroy()
	</script>
</body>
</html>