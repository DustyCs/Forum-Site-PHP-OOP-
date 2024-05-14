console.log("hello world");

// objects

let object1 = {name:"johhny",
               numero:10, 
               status:"well",
               func: function() {
                return this.name + " " + this.status;
               }
            }

function helloWorld(){
    console.log("helloo  woorlddd");
}

const helloWorld2 = () => {
    console.log("Hai world")
}

helloWorld();

console.log(object1.func())