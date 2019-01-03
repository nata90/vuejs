<!DOCTYPE html>
<html>
<head>
	<title>VUE JS</title>
	<script src="lib/vue.js"></script>
</head>
<body>
	<div id="app">
		<h1>{{name.split('')}}</h1>
		<h2>{{age}}</h2>
		<p>{{gender}}</p>
		<p>{{hobby}}</p>
		<p>{{children}}</p>
	</div>
	<script type="text/javascript">
		var vm = new Vue({
			el:'#app',
			data:{
				name : 'Hafid',
				age : 33,
				gender:true,
				hobby: ["coding", "sleeping"],
				children:{
					1: 'Ammar',
					2: 'Faqih',
					3: 'Syamil'
				}
			},

		})

		vm.$watch('name', function (newValue, oldValue) {
			console.log('Var name diubah dari '+oldValue+' menjadi '+newValue)
		})

		//vm.$destroy()
	</script>
</body>
</html>