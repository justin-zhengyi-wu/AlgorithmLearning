### 有一组数字，从1到n，从中减少了m个数，顺序也被打乱，放在一个n-m的数组里
### 请找出丢失的数字，最好能有程序，最好算法比较快，假设n=10000
JavaScript 版本
```js
var n = 10000;
var oldArr = [5,1,6,3,7,8,10];
var newArr = new Array(n + 1);
var lostArr = [];
for(var i = 0; i < n; i++) {
    newArr[oldArr[i]] = 1;
}
for(var j = 1, l = newArr.length; j < l; j++) {
    if(!newArr[j]) {
        lostArr.push(j);
    }
}
console.log(lostArr);
```
