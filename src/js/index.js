
new Vue({
    el: '#app',
    data: {
        isShowLeftSideBar: true,
        leftSideStyleText: {},
        containStyle: {
            left: '200px',
            transition: '0.5s'
        },
        leftSideStyle: {
            width: '200px',
            transition: '0.5s'
        },
        message: 'This is a basic setup project.'
    },

    methods: {
        actionLeftSideBar: function () {
            this.isShowLeftSideBar = !this.isShowLeftSideBar
            if (this.isShowLeftSideBar) {
                setTimeout(() => {
                    this.leftSideStyleText = {
                        display: 'inline'
                    }
                }, 400)
                this.containStyle = {
                    left: '200px',
                    transition: '0.5s'
                }
                this.leftSideStyle = {
                    width: '200px',
                    transition: '0.5s'
                }
            } else {
                this.containStyle = {
                    left: '60px',
                    transition: '0.5s'
                }
                this.leftSideStyle = {
                    width: '60px',
                    transition: '0.5s'
                }
                this.leftSideStyleText = {
                    display: 'none',
                }
            }
        }
    }
})
