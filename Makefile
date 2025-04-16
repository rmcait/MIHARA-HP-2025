init:
	@echo "📦 .env を作成中..."
	cp -n backend/.env.example backend/.env || true

	@echo "🚀 Docker コンテナ起動中..."
	docker-compose up -d --build

	@echo "⏳ サービス起動を少し待機..."
	sleep 10

	@echo "📂 Composer install..."
	docker-compose exec app composer install

	@echo "🔑 APP_KEY生成..."
	docker-compose exec app php artisan key:generate

	@echo "🗃️ マイグレーション実行..."
	docker-compose exec app php artisan migrate

	@echo "🔗 ストレージリンク作成..."
	docker-compose exec app php artisan storage:link

	@echo "🎨 フロントエンドビルド（Docker内Node）..."
	docker-compose run --rm node

	@echo "✅ セットアップ完了！ http://localhost:8080 へGO！"