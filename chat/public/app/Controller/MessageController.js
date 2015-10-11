app.controller('MessageController', [function () {
        this.messages = [{'user' : 'Admin', 'message': 'Seja bem vindo'}];
        this.myMessage = null;
        this.myUser = null;
        this.sendMessage = function () {
            this.messages.push({message: this.myMessage, user: this.myUser});
            this.myMessage = '';
        };

    }
]);