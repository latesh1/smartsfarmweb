//Read file
function readFile() {
    var fs = require("fs")
    fs.readFile("note.txt",
        (err, data) => {
            if (err) {

                return console.log("badi bund")
            }
            console.log(data.toString())
        })
}
//Access Function
function access() {
    var fs = require("fs")
    fs.access('note.txt', fs.F_OK,
        (err) => {
            return console.error(err)

        })
}
//Open file method
function open() {
    var fs = require("fs")
    fs.open('note.txt', 'w',
        (err, f) => {
            if (err) {
                throw err;

            }
            console.log("saved")
        })
}

//append file
function append() {
    var fs = require("fs")
    fs.appendFile('note.txt', 'Hello world',
        (err) => {
            if (err) {
                throw err;
            }
            console.log("updated")

        })
}
function unlink() {
    var fs = require('fs');
    fs.unlink('note.txt', (err) => {
        if (err) {
            throw err;
        }
        console.log('File deleted!');
    })
}
var prompt = require("prompt-sync")()
var ch = parseInt(prompt("enter tour choice"))
switch (ch) {
    case 1: readFile()
        break;
    case 2: access()
        break;
    case 3: open()
        break;
    case 4: append()
        break;
    case 5: unlink()
        break;
}