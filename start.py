

# Define a function to handle the /start command
def start(update, context):
    context.bot.send_message(chat_id=update.effective_chat.id, text="Hello! I'm a Telegram bot.")

# Define a function to handle normal text messages
def echo(update, context):
    context.bot.send_message(chat_id=update.effective_chat.id, text=update.message.text)

# Define the main function to run the bot
def main():
    # Create an instance of the Updater class and pass your bot's token
    updater = Updater(token='6245550442:AAFvq1yJ3Wf-ipu0qeSKv6L2S8--1IljvLk', use_context=True)

    # Get the dispatcher to register handlers
    dispatcher = updater.dispatcher

    # Register the /start command handler
    start_handler = CommandHandler('start', start)
    dispatcher.add_handler(start_handler)

    # Register the echo handler for normal text messages
    echo_handler = MessageHandler(Filters.text & ~Filters.command, echo)
    dispatcher.add_handler(echo_handler)

    # Start the bot
    updater.start_polling()

    # Run the bot until you press Ctrl-C
    updater.idle()

# Run the main function
if __name__ == '__main__':
    main()
