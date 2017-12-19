function solution(arr) {
    if (!arr || !Array.isArray(arr)) {
        return -1;
    }

    var leftSum = 0,
        rightSum = 0,
        len = arr.length;
    for (var i = 1; i < len; i++) {
        rightSum += arr[i];
    }

    if (leftSum == rightSum) {
        return 0;
    }

    for (var j = 1; j < len; j++) {
        leftSum += arr[j - 1];
        rightSum -= arr[j];
        if (leftSum == rightSum) {
            return j;
        }
    }
    return -1;
}

console.log(solution([-7, 1, 5, 2, -4, 3, 0]));
