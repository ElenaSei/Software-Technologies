function solution(input) {
    let arr = new Array(Number(input[0]));
    //arr = arr.fill(0, 0 , arr.length);

    for (let i = 1; i < input.length; i++) {
        let index = Number(input[i].split(" - ")[0]);
        let value = Number(input[i].split(" - ")[1]);

        arr[index] = value;
    }

    for (let i = 0; i < arr.length; i++) {
        if (arr[i] == undefined) {
            arr[i] = 0;
        }
        console.log(arr[i]);
    }
}

solution(["2", "0 - 5", "0 - 6", "0 - 7"]);