Automatic Account Creation
=========
#### General
- Server wide latest death list
- Server wide latest kills list
- Server information with PvP settings, skill rates, experience stages (parses config.lua and stages.xml file)
- Spells page with vocation filters (parses spells.xml file)
- Item list showing equippable items (parses items.xml file)

#### Account & login:
- Basic account registration
- Change password and email
- reCaptcha antibot(spam) system
- Email verification & lost account interface
- Two-factor authentication support
- Hide characters from character list

#### Create character:
- Supports custom vocations, starting skills, available towns
- Character firstitems through provided Lua script
- Soft character deletion

#### House:
- Houses list with towns filter
- House bidding

#### Character profile
- General information such as name, vocation, level, guild membership etc...
- Obtained achievement list
- Player comments
- Death list
- Quest progression
- Character list

#### Guilds
- Configurable level and account type restrictions to create guild
- Create and disband guilds
- Invite and revoke players to guild
- Change name of guild positions
- Add nickname to guild members
- Guild forum board accessible only for guild members & admin.
- Upload guild image
- Guild description
- Invite, accept and cancel war declarations
- View ongoing guild wars

#### Item market
- Want to buy list
- Want to sell list
- Item search
- Compare item offer with other similar offers, as well as transaction history

#### Downloads
- Page with download links to client version and IP changer
- Tutorial on how to connect to server

#### Achievement system
- List of all achievements and character obtained achievements in their profile.

#### Highscores
- Vocation & skill type filters

#### Buy shop points / digital currency
- PayPal payment gateway
- PayGol (SMS) payment gateway
- PagseGuro payment gateway

#### Shop system
- Items
- Premium days
- Change character gender
- Change character name
- Outfits
- Mounts
- Custom offer types. (basic Lua knowledge required)

#### Forum
- Create custom discussion boards
- Level restriction to post
- Player outfit as avatars
- Player position
- Guildboards
- Feedback board where all threads are only visible for admins.
- Hide thread, close thread, stick thread
- Forum search

#### Cache system
- Offload SQL load and CPU usage by loading treated data from a flatfile instead of raw SQL queries.

#### Administration
- Delete character
- Ban character and/or account
- Change password of account
- Give character in-game position
- Give shop points to character
- Teleport a player or all players to home town, specific town or specific position.
- Edit level and skills of player
- View in-game bug reports and feedback on forum
- Overview of shop transactions and their status
- Moderate user submitted images to the gallery
- Create news with a feature rich text editor
- Add changelogs
- Load and update server and spells information
