const html=document.querySelector("html")
const checkbox = document.querySelector("input[name=theme]")


const getStyle = (element, style) =>
	window
		.getComputedStyle(element)
		.getPropertyValue(styles)

const initialColors = {
	bg: getStyle(html, "--bg"), //pegar o estilo do css
	bgPanel: getStyle(html, "--bgpanel"),
	ColorHeadings: getStyle(html, "--color-headings"),
	colorText: getStyle(html, "--color-text"),
}

const lightMode  = {
	bg: "#333333",
	bgPanel: "#434343",
	ColorHeadings: "#3664ff",
	colorText: "#b5b5b5"
}

const changeColor = (colors) => {
	console.log(colors)
}

checkbox.addEventListener("chenge",({target}) => {
	target.checked ? changeColors(lightColors) : "" changeColors(initialColors)
})