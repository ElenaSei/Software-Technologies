function solve(array) {

    let resultArr = [];
    for (let i = 0; i < array.length; i++) {
        let command = array[i].split(' ')[0];

        if (command == "add"){
            let number = Number(array[i].split(' ')[1]);
            resultArr.push(number);
        }
        else if(command == "remove"){
            let index = Number(array[i].split(' ')[1]);
            if (typeof resultArr[index] !== "undefined") {
               resultArr.splice(index, 1);
            }
        }
    }
    for (let j = 0; j < resultArr.length; j++) {
        console.log(resultArr[j]);
    }
}