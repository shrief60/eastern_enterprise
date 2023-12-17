
### Installation

1. Clone the repository:
    For ssh: 
        git clone git@github.com:shrief60/eastern_enterprise.git
    For Https: 
        git clone https://github.com/shrief60/eastern_enterprise.git

2. Run this bash script 

    `chmod +x setup && ./setup `

3. Run Database migrations
    `./vendor/bin/sail artisan migrate --seed`

### Network Ports Configuration

1. MYSQL Port is : 3308

2. PHP server Port : 8081

You can change these ports on your local environment if there are not available.