clean:
	@echo "Basic cleaning..."
	@find . -name "*~" -exec rm -rf {} \;
	@rm -rf *.log
	@rm -rf *.txt
	@rm -rf *.pyc

commit:
	@echo "Commiting changes..."
	@git commit -am "Commit"
	@git push origin master

pull:
	@echo "Pulling from repository..."
	@git reset --hard HEAD	
	@git pull
	@chown -R www-data.www-data .

permissions:
	@chown -R www-data.www-data .

