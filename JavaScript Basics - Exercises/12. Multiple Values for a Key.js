function solve(array) {
    let result = {};
    let resultKey = array.pop();


    for (let i = 0; i < array.length; i++) {
        let key = array[i].split(' ')[0];
        let value = array[i].split(' ')[1];

        if (!(key in result)){
            result[key] = [];
        }
        result[key].push(value);
    }

console.log(result[resultKey] === undefined ?
    "None" : result[resultKey].join("\n"));

}