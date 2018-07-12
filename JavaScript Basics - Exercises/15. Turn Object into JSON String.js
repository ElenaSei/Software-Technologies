function solve(arr) {
    let obj = {};

    for (let i = 0; i < arr.length; i++) {
        let key = arr[i].split(" -> ")[0];
        let value = arr[i].split(" -> ")[1];
        if (isNaN(Number(value))){
            obj[key] = value;
        } else{
            obj[key] = Number(value);
        }
    }
    console.log(JSON.stringify(obj));
}