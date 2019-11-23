# symfony_4.3_fresh
Fresh symfony 4.3 ready to start development installation

##### Installation

1) clone repo using following command

    > git clone https://github.com/qasim-nadeem/symfony_4.3_fresh.git

2) cd into the cloned repository and install vendor packages with following command

    > composer install    

3) if you are going to use database in your project then edit .env file with your database credentials

4) use following command to run built-in symfony server to see the project running.

    > php bin/console server:run



##### Following bundles and packs are installed in this symfony project.
1) server
2) annotaions
3) sec-checker
4) profiler --dev
6) debug --dev
7) doctrine


#####How this installation was created

following composer commands were used to create this installation:

    composer create-project symfony/skeleton project_name “4.3.*”
    composer require server
    composer require annotaions
    composer require sec-checker
    composer require profiler --dev
    composer require debug –dev
    composer require doctrine


