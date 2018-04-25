function deleteWebHost() {
	let divArray = document.querySelectorAll("div");
	let wh = divArray[divArray.length - 1];
	console.log(wh);
	wh.remove();
}

let delayWH = setTimeout(deleteWebHost, 4000);