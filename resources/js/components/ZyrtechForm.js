class ZyrtechForm {
  constructor(data) {
    this.originalData = JSON.parse(JSON.stringify(data))

    Object.assign(this, data)

    this.errors = {}
    this.submitted = false
  }

  data() {
    return Object.keys(this.originalData).reduce((data, attribute) => {
      data[attribute] = this[attribute]

      return data
    }, {})
  }

  get(endpoint) {
    return axios.get(endpoint)
      .catch(this.onFail.bind(this))
      .then(this.onSuccess.bind(this))
  }

  delete(endpoint) {
    this.submit(endpoint, 'delete')
  }

  patch(endpoint) {
    this.submit(endpoint, 'patch')
  }

  post(endpoint) {
    this.submit(endpoint)
  }

  submit(endpoint, requestType = 'post') {
    return axios[requestType](endpoint, this.data())
      .catch(this.onFail.bind(this))
      .then(this.onSuccess.bind(this))
  }

  onSuccess(response) {
    this.submitted = true
    this.errors = {}

    return response
  }

  onFail(error) {
    console.log(error)
    this.errors = error.response.data.errors
    this.submitted = false

    throw error
  }

  reset() {
    Object.assign(this, this.originalData)
  }
}

export default ZyrtechForm