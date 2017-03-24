/**
 * alertの表示
 * @param  String message alertするメッセージ
 */
var showAlert = function(message) {
    if (message !== undefined && message !== "") {
        alert(message)
    } else {
        console.log("no message gievn");
    }
};
