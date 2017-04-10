Array.prototype.selection_sort = function() {
	  var i, j, min;
	  var temp;
	  for (i = 0; i < this.length - 1; i++) {
		    min = i;
		    for (j = i + 1; j < this.length; j++)
			      if (this[min] > this[j])
				        min = j;
		    temp = this[min];
		    this[min] = this[i];
		    this[i] = temp;
	  }
};
