window.vcv.on('ready', (action, id, options) => {
  let enableAnimate = (id, action, innerKey) => {
    let selector = id ? '[data-vcv-element="' + id + '"]' : '[data-vce-animate]'
    let elements = document.querySelectorAll(selector)
    elements = [].slice.call(elements)
    elements.forEach((element) => {
      if (id) {
        if (!innerKey) {
          let containerElement = element

          if (!containerElement.getAttribute('data-vce-animate')) {
            containerElement = element.querySelector('[data-vce-animate]:not([data-vcv-animate-fieldkey])')
          }

          if (containerElement) {
            animateElement(containerElement)
          }

          if (action === 'add') {
            let innerElements = element.querySelectorAll('[data-vcv-animate-fieldkey]')
            innerElements = [].slice.call(innerElements)
            innerElements.forEach(function (innerElement) {
              animateElement(innerElement)
            });
          }
        } else {
          let innerSelector = `[data-vce-animate][data-vcv-animate-fieldkey="${innerKey}"]`
          let innerElement = element.querySelector(innerSelector)
          if (innerElement) {
            animateElement(innerElement)
          }
        }
      } else {
        animateElement(element)
      }
    })
  }

  let animateElement = (element) => {
    let previousElementWaypoints = element.vcvWaypoints
    if (previousElementWaypoints) {
      previousElementWaypoints.destroy()
      element.removeAttribute('data-vcv-o-animated')
    }
    let waypointObj = new window.Waypoint({
      element: element,
      handler: (a, b, c, d, e) => {
        element.setAttribute('data-vcv-o-animated', 'true')
        waypointObj.destroy()
      },
      offset: '85%'
    })
    element.vcvWaypoints = waypointObj
  }

  if (action === 'add' || action === undefined || (action === 'update' && options && (options.changedAttribute === 'animation' || options.changedAttributeType === 'animateDropdown'))) {
    let innerKey = ''
    if (action && options && options.changedAttributeType === 'animateDropdown' && options.changedAttribute !== 'animation') {
      innerKey = options.changedAttribute
    }
    enableAnimate(action && id ? id : '', action, innerKey)
  }
})