function numbers(arr) {

    let count = 0;
    for (let i = 0; i < arr.length; i++) {
        if (arr[i] < 0) {
            count++;
        }
    }
    let result = "";

    if (count % 2 == 0) {
        result = "Positive";
    }
    else{
        result = "Negative";
    }
    return result;
}