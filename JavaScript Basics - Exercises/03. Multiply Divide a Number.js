function solution(array) {
    let firstNum = Number(array[0]);
    let secondNum = Number(array[1]);

    if (secondNum >= firstNum) {
        return firstNum * secondNum;
    } else {
        return firstNum / secondNum;
    }

}