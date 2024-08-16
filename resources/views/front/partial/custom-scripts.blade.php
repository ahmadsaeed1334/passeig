<script>
	const cursor = document.createElement('div')
	const child = document.createElement('div')

	const cursorDefaultStyle = `
    width: 28px;
    height: 28px;
    border-radius: 9999px;
    border: 2px solid #2B697E;
    position: fixed;
    transform: translate(-50%, -50%);
    top: 0; left: '0';
    transition: 300ms ease-out;
    pointer-events: none;
`

	const childDefaultStyle = `
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background-color: #2B697E;
    position: fixed;
    top: 0; left: '0';
    transform: translate(-50%, -50%);
    pointer-events: none;
`

	cursor.style.cssText = cursorDefaultStyle
	child.style.cssText = childDefaultStyle

	document.body.appendChild(cursor)
	document.body.appendChild(child)

	let isActived = false

	window.addEventListener('mousemove', (event) => {
		if (isActived) return

		cursor.style.top = child.style.top = `${event.clientY}px`
		cursor.style.left = child.style.left = `${event.clientX}px`
	})

	const onHover = document.querySelectorAll('.onHover')
	const fixed = (event, getTransition) => {
		event.stopPropagation()
		isActived = true
		const element = event.currentTarget
		const {
			width,
			height,
			top,
			left
		} = element.getBoundingClientRect()

		const style = window.getComputedStyle(element)
		const borderRadius = style.getPropertyValue('border-radius')
		const transition = style.getPropertyValue('transition')

		cursor.style.cssText = `
            ${cursorDefaultStyle}
            width: ${width}px;
            height: ${height}px;
            border-radius: ${borderRadius};
            top: ${top}px;
            left: ${left}px;
            transform: translate(0, 0);
            border-color: white;
            ${(getTransition) ? `transition: ${transition};`: ''}
        `

		child.style.cssText = `
            ${childDefaultStyle}
            display: none
        `
	}

	for (const hover of onHover) {
		hover.addEventListener('mousedown', (event) => fixed(event, true))
		hover.addEventListener('mouseup', (event) => fixed(event, true))
		hover.addEventListener('mouseover', (event) => fixed(event, false))
		hover.addEventListener('mouseleave', (event) => {
			isActived = false

			cursor.style.cssText = cursorDefaultStyle
			child.style.cssText = childDefaultStyle
		})
	}
</script>
