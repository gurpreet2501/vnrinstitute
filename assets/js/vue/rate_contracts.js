new Vue({
	el: '#add-rate-contracts',
	data: {
		iterator: {items: [0]},
		contractType: 'by_end_date',
	},
	computed: {},
	methods: {
		iteratorInsert: function(index){
			var self = this;
			var lastEle = this.iterator[index][this.iterator[index].length-1];
			this.iterator[index].push(lastEle+1);
			setTimeout(function(){  self.hideElements(); });			
		},

		iteratorRemove: function(index, id){
			var self = this;
			if(this.iterator[index].length <= 1)
				return alert('Cannot delete there should be at-least one entry.');

			this.iterator[index].splice(id - 1, 1);
			console.log(id);

			setTimeout(function(){  self.hideElements(); });
		},

		onContractTypeChange: function(){
			this.iterator.items = [0];
			this.hideElements();
		},

		hideElements: function(){
			if (this.contractType === 'by_end_date'){
				$( ".to-date" ).removeClass( "hidden" );
				$( ".quantity, .trash-icon, .plus-icon" ).addClass( "hidden" );
			}else{
				$( ".quantity, .trash-icon, .plus-icon" ).removeClass( "hidden" );
				$( ".to-date" ).addClass( "hidden" );
			}
		}
	}
});