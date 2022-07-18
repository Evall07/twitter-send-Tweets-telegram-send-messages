# twitter-send-Tweets-telegram-send-messages
This Php Script Allows you to Send messages in your Telegram channel &amp; Allows you to send tweets via PHP API

<hr>

Lets Start With Telegram:
1. You need to create a bot from <a href="https://t.me/botfather">BotFather</a>
2. you should have the bot API TOKEN You will find it in Bot Father Too
3. Select the channel you want 
4. add the bot to the channel
5. Go to <a href="https://t.me/getidsbot">Here</a> And share a message from the channel to this bot
6. After that you will see a message same that:
👤 You
 ├ id: Your Id
 ├ is_bot: false
 ├ first_name: .....٫
 ├ username: .....
 ├ language_code: en (-)
 └ created: ~ 1/2019 (?) (https://t.me/getidsbot?start=idhelp)

💬 Origin chat
 ├ id: The Channel id
 ├ title: channel name
 ├ username: channel link
 └ type: channel

📃 Message
 ├ message_id: 142 ()
 └ forward_date: Fri, 15 Jul 2022 04:53:32 GMT .
 <hr>
 
 7. Take the 💬 Origin chat id Now:
 Go ahead to message.php then Telegram Api:
 $apitoken = your bot token
 chat_id channel id
 text the messages that will send
 <hr>
 <b>Now The Telegram has finished</b>
 <hr>
 in order to use twitter api you need:
 1. create your twitter developer account 
 2. your app tokens.
 All that steps is showen in this link:
 <a href="https://developer.twitter.com/en/docs/authentication/oauth-1-0a/api-key-and-secret">Here</a>
