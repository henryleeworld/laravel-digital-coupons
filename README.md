# Laravel 8 電子折價券

過去，消費者購物習慣最愛比價格低及送貨快速，使得各大電商平台大量使用電子折價券來吸引消費者增加購買意願。Laravel 8 電子折價券主要是用的 [QuickAdminPanel](https://quickadminpanel.com) 生成的，除了一些定制代碼，可依需求彈性改造的工具。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __storage:link__ 來建立連結符號，建立一個從 `public/storage` 到 `storage/app/public` 的符號連結。
```sh
$ php artisan storage:link
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移，並執行資料庫填充（如果要測試的話）。
```sh
$ php artisan migrate --seed
```
- 執行安裝 Laravel Mix 引用的依賴項目，並執行所有 Mix 任務。
```sh
$ npm install && npm run dev
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/login` 來進行登入，預設的電子郵件和密碼分別為 __admin@admin.com__ 和 __password__ 。

----

## 畫面截圖
![](https://i.imgur.com/bF4DOOe.png)
> 列出您已購買的電子折價券

![](https://i.imgur.com/HdEX5kQ.png)
> 消費者購買電子折價券時認列收入

![](https://i.imgur.com/ksgtKpM.png)
> 每一組電子折價券僅能使用一次，一經使用系統即無法返還，若有遺失、退貨、取消訂單時，恕無法退還