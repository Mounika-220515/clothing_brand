1).GIT CONFIGURATION COMMANDS

1. git config --global user.name

Command Name:
git config --global user.name

Syntax:
git config --global user.name "your name"

Purpose:
This command sets your name for all Git commits.

Example:
git config --global user.name "mounika"

screenshort:<img width="1366" height="768" alt="Screenshot (1)" src="https://github.com/user-attachments/assets/fe4d16f1-161d-436b-bb47-dbfa938babc0" />


2. git config --global user.email
Command Name:
git config --global user.email

Syntax:
git config --global user.email "your@email.com"

Purpose:
This sets your email for all Git commits.

Example:
git config --global user.email "mounika@gmail.com"

screenshort:![Uploading useremail.png…]()


3. git config --list
   
Command Name:
git config --list

Syntax:
git config --list

Purpose:
This shows all Git configuration settings.

Example:
git config --list

screenshort:![Uploading list.png…]()


4. git config --unset

Command Name:
git config --unset

Syntax:
git config --global --unset user.name

Purpose:
This removes a Git configuration setting.

Example:
git config --global --unset user.name

screenshort:<img width="1366" height="768" alt="unset" src="https://github.com/user-attachments/assets/6d5c9d21-b177-4de3-a50d-aaa9e8d94898" />


2).repository setup commands
1.git init

Command Name:
git init

Syntax:
git init

Purpose:
Initializes a new Git repository in the current folder.

Example:
mkdir test-repo
cd test-repo
git init
screenshort:![Uploading Screenshot (1).png…]()

2.git clone

Command Name:
git clone

Syntax:
git clone <repository-url>

Purpose:
Clones an existing GitHub repository to your local machine.

Example:https://github.com/Mounika-220515/clothing_brand/new/main


screenshort:![Uploading git clone.png…]()

3. git clone --branch

Command Name:
git clone --branch

Syntax:
git clone --branch branch-name repository-url

Purpose:
Clones a specific branch from a repository instead of the default branch.

Example:
git clone --branch main https://github.com/Mounika-220515/clothing_brand/new/main

screenshort:![Uploading git clone branch.png…]()

4. git clone --depth

Command Name:
git clone --depth

Syntax:
git clone --depth 1 repository-url

Purpose:
Clones a repository with a limited commit history (faster download).

Example:
git clone --depth 1 https://github.com/Mounika-220515/clothing_brand/new/main













