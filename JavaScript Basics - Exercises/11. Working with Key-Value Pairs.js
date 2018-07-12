function solve(array) {
    let result = {};

    for (let i = 0; i < array.length - 1; i++) {
        let key = array[i].split(' ')[0];
        let value = array[i].split(' ')[1];

        result[key] = value;
    }

    let resultKey = array[array.length - 1];
    if (typeof result[resultKey] === "undefined") {
        console.log("None");
    }
    else{
        console.log(result[resultKey]);
    }
}

solve(["key value", "key eulav", "test tset", "key"]);