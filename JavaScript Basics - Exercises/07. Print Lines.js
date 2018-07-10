function solution(arr) {
    for (let i = 0; i < arr.length; i++) {
        if (arr[i] !== "Stop"){
            console.log(arr[i]);
        }
        else {
            break;
        }
    }
}