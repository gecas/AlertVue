<template>
	<div class="Alert Alert--{{ type | capitalize }}" v-show="show" transition="fade">
		<slot></slot>
	
	<span class="Alert__Close" v-show="important" @click="show = false">
			&times;
		</span>
</div>
</template>

<script>
	export default {
		props : {
			type : { default: 'info' },
			timeout : { default : 3000},
			important : {
				type : Boolean,
				default : false
			}
		},

		data(){
			return { show : true };
		},

		ready(){
			if( ! this.important){
			setTimeout(
				() => this.show = false,
				this.timeout
			)
		  }
		}
	}
</script>

<style>
	.Alert{
		padding: 10px;
		position: relative;
	}

	.Alert--Info{
		background-color: #e3e3e3;

	}

	.Alert--Success{
		background: green;
		color:#fff;
	}

	.Alert__Close { 
		position: absolute;
		top: 10px;
		right: 10px;
		cursor: pointer;
	 }

	.fade-transition {
		transition: opacity 1s ease;
	}

	.fade-leave { 
		opacity: 0;	
	}
</style>