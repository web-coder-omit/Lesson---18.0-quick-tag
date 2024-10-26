QTags.addButton('button one','D','<u>','</u>');
QTags.addButton('button one','Your Name:',you_name_fun);
QTags.addButton('button three','FA',you_poup);
function you_name_fun(){
    var name= prompt('What is your name?');
    var text = "Hello "+name;
    QTags.insertContent(text);
}
function you_poup(){
    tb_show("Fontawesome",qtsd.preview);
}
// QTags.addButton('button_one', 'D', '<u>', '</u>');  // Unique ID for the button
// QTags.addButton('button_two', 'Your Name:', you_name_fun);  // Unique ID for the button
// QTags.addButton('button_three', 'FA', you_poup);

// function you_name_fun() {
//     var name = prompt('What is your name?');
//     var text = "Hello " + name;
//     QTags.insertContent(text);
// }

// function you_poup() {
//     if (typeof qtsd !== 'undefined' && qtsd.preview) {  // Ensure qtsd is defined
//         tb_show("FontAwesome", qtsd.preview);
//     } else {
//         console.error("qtsd.preview is undefined.");
//     }
// }
