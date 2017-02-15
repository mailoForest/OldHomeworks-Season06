/**
 * 
 */
var array = [1, "a", 7, 8, 9, 4, 6, "b", 4, "a"];
function mostFrequentArrayElement(array){
	var arr = {};
	
	for (var x in array){
		 var value = array[x];
		 arr[value] = 0;
	}
	for (x in array, arr){
		value = array[x];
		for(var y in arr){
			if (value == y) {
				arr[y] ++ 
		    }
		}
	}
	var maxValue = 0, maxKey = 0;
	for (x in arr){
		if (maxValue < arr[x]) {
		   maxValue = arr[x];
		   maxKey = x;
		}
	}
	var result = "Резултат: " + maxKey + " - " + maxValue + " пъти";
	return result;
}
console.log(mostFrequentArrayElement(array));