node_modules:
	yarn

.PHONY: dev
dev: node_modules
	npx parcel index.njk

.PHONY: build
build: node_modules
	npx parcel build --no-minify --public-url '.' index.njk
