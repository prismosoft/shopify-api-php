<?php

/***********************************************************************************************************************
* This file is auto-generated. If you have an issue, please create a GitHub issue.                                     *
***********************************************************************************************************************/

declare(strict_types=1);

namespace ShopifyTest\Rest;

use Shopify\Auth\Session;
use Shopify\Context;
use Shopify\Rest\Admin2024_07\CustomCollection;
use ShopifyTest\BaseTestCase;
use ShopifyTest\Clients\MockRequest;

final class CustomCollection202404Test extends BaseTestCase
{
    /** @var Session */
    private $test_session;

    public function setUp(): void
    {
        parent::setUp();

        Context::$API_VERSION = "2024-07";

        $this->test_session = new Session("session_id", "test-shop.myshopify.io", true, "1234");
        $this->test_session->setAccessToken("this_is_a_test_token");
    }

    /**

     *
     * @return void
     */
    public function test_1(): void
    {
        $this->mockTransportRequests([
            new MockRequest(
                $this->buildMockHttpResponse(200, json_encode(
                  ["custom_collections" => [["id" => 841564295, "handle" => "ipods", "title" => "IPods", "updated_at" => "2008-02-01T19:00:00-05:00", "body_html" => "<p>The best selling ipod ever</p>", "published_at" => "2008-02-01T19:00:00-05:00", "sort_order" => "manual", "template_suffix" => null, "published_scope" => "web", "admin_graphql_api_id" => "gid://shopify/Collection/841564295", "image" => ["created_at" => "2024-01-02T09:28:43-05:00", "alt" => "MP3 Player 8gb", "width" => 123, "height" => 456, "src" => "https://cdn.shopify.com/s/files/1/0005/4838/0009/collections/ipod_nano_8gb.jpg?v=1704205723"]], ["id" => 395646240, "handle" => "ipods_two", "title" => "IPods Two", "updated_at" => "2008-02-01T19:00:00-05:00", "body_html" => "<p>The best selling ipod ever. Again</p>", "published_at" => "2008-02-01T19:00:00-05:00", "sort_order" => "manual", "template_suffix" => null, "published_scope" => "web", "admin_graphql_api_id" => "gid://shopify/Collection/395646240"], ["id" => 691652237, "handle" => "non-ipods", "title" => "Non Ipods", "updated_at" => "2013-02-01T19:00:00-05:00", "body_html" => "<p>No ipods here</p>", "published_at" => "2013-02-01T19:00:00-05:00", "sort_order" => "manual", "template_suffix" => null, "published_scope" => "web", "admin_graphql_api_id" => "gid://shopify/Collection/691652237"]]]
                )),
                "https://test-shop.myshopify.io/admin/api/2024-07/custom_collections.json?ids=395646240%2C691652237%2C841564295",
                "GET",
                null,
                [
                    "X-Shopify-Access-Token: this_is_a_test_token",
                ],
            ),
        ]);

        CustomCollection::all(
            $this->test_session,
            [],
            ["ids" => "395646240,691652237,841564295"],
        );
    }

    /**

     *
     * @return void
     */
    public function test_2(): void
    {
        $this->mockTransportRequests([
            new MockRequest(
                $this->buildMockHttpResponse(200, json_encode(
                  ["custom_collections" => [["id" => 841564295, "handle" => "ipods", "title" => "IPods", "updated_at" => "2008-02-01T19:00:00-05:00", "body_html" => "<p>The best selling ipod ever</p>", "published_at" => "2008-02-01T19:00:00-05:00", "sort_order" => "manual", "template_suffix" => null, "published_scope" => "web", "admin_graphql_api_id" => "gid://shopify/Collection/841564295", "image" => ["created_at" => "2024-01-02T09:28:43-05:00", "alt" => "MP3 Player 8gb", "width" => 123, "height" => 456, "src" => "https://cdn.shopify.com/s/files/1/0005/4838/0009/collections/ipod_nano_8gb.jpg?v=1704205723"]], ["id" => 395646240, "handle" => "ipods_two", "title" => "IPods Two", "updated_at" => "2008-02-01T19:00:00-05:00", "body_html" => "<p>The best selling ipod ever. Again</p>", "published_at" => "2008-02-01T19:00:00-05:00", "sort_order" => "manual", "template_suffix" => null, "published_scope" => "web", "admin_graphql_api_id" => "gid://shopify/Collection/395646240"], ["id" => 691652237, "handle" => "non-ipods", "title" => "Non Ipods", "updated_at" => "2013-02-01T19:00:00-05:00", "body_html" => "<p>No ipods here</p>", "published_at" => "2013-02-01T19:00:00-05:00", "sort_order" => "manual", "template_suffix" => null, "published_scope" => "web", "admin_graphql_api_id" => "gid://shopify/Collection/691652237"]]]
                )),
                "https://test-shop.myshopify.io/admin/api/2024-07/custom_collections.json",
                "GET",
                null,
                [
                    "X-Shopify-Access-Token: this_is_a_test_token",
                ],
            ),
        ]);

        CustomCollection::all(
            $this->test_session,
            [],
            [],
        );
    }

    /**

     *
     * @return void
     */
    public function test_3(): void
    {
        $this->mockTransportRequests([
            new MockRequest(
                $this->buildMockHttpResponse(200, json_encode(
                  ["custom_collections" => [["id" => 1063001337, "handle" => "macbooks", "title" => "Macbooks", "updated_at" => "2024-01-02T09:30:33-05:00", "body_html" => null, "published_at" => "2024-01-02T09:30:33-05:00", "sort_order" => "best-selling", "template_suffix" => null, "published_scope" => "web", "admin_graphql_api_id" => "gid://shopify/Collection/1063001337"]]]
                )),
                "https://test-shop.myshopify.io/admin/api/2024-07/custom_collections.json?since_id=841564295",
                "GET",
                null,
                [
                    "X-Shopify-Access-Token: this_is_a_test_token",
                ],
            ),
        ]);

        CustomCollection::all(
            $this->test_session,
            [],
            ["since_id" => "841564295"],
        );
    }

    /**

     *
     * @return void
     */
    public function test_4(): void
    {
        $this->mockTransportRequests([
            new MockRequest(
                $this->buildMockHttpResponse(200, json_encode(
                  ["custom_collections" => [["id" => 841564295, "handle" => "ipods", "title" => "IPods", "updated_at" => "2008-02-01T19:00:00-05:00", "body_html" => "<p>The best selling ipod ever</p>", "published_at" => "2008-02-01T19:00:00-05:00", "sort_order" => "manual", "template_suffix" => null, "published_scope" => "web", "admin_graphql_api_id" => "gid://shopify/Collection/841564295", "image" => ["created_at" => "2024-01-02T09:28:43-05:00", "alt" => "MP3 Player 8gb", "width" => 123, "height" => 456, "src" => "https://cdn.shopify.com/s/files/1/0005/4838/0009/collections/ipod_nano_8gb.jpg?v=1704205723"]], ["id" => 395646240, "handle" => "ipods_two", "title" => "IPods Two", "updated_at" => "2008-02-01T19:00:00-05:00", "body_html" => "<p>The best selling ipod ever. Again</p>", "published_at" => "2008-02-01T19:00:00-05:00", "sort_order" => "manual", "template_suffix" => null, "published_scope" => "web", "admin_graphql_api_id" => "gid://shopify/Collection/395646240"]]]
                )),
                "https://test-shop.myshopify.io/admin/api/2024-07/custom_collections.json?product_id=632910392",
                "GET",
                null,
                [
                    "X-Shopify-Access-Token: this_is_a_test_token",
                ],
            ),
        ]);

        CustomCollection::all(
            $this->test_session,
            [],
            ["product_id" => "632910392"],
        );
    }

    /**

     *
     * @return void
     */
    public function test_5(): void
    {
        $this->mockTransportRequests([
            new MockRequest(
                $this->buildMockHttpResponse(200, json_encode(
                  ["count" => 3]
                )),
                "https://test-shop.myshopify.io/admin/api/2024-07/custom_collections/count.json",
                "GET",
                null,
                [
                    "X-Shopify-Access-Token: this_is_a_test_token",
                ],
            ),
        ]);

        CustomCollection::count(
            $this->test_session,
            [],
            [],
        );
    }

    /**

     *
     * @return void
     */
    public function test_6(): void
    {
        $this->mockTransportRequests([
            new MockRequest(
                $this->buildMockHttpResponse(200, json_encode(
                  ["count" => 2]
                )),
                "https://test-shop.myshopify.io/admin/api/2024-07/custom_collections/count.json?product_id=632910392",
                "GET",
                null,
                [
                    "X-Shopify-Access-Token: this_is_a_test_token",
                ],
            ),
        ]);

        CustomCollection::count(
            $this->test_session,
            [],
            ["product_id" => "632910392"],
        );
    }

    /**

     *
     * @return void
     */
    public function test_7(): void
    {
        $this->mockTransportRequests([
            new MockRequest(
                $this->buildMockHttpResponse(200, json_encode(
                  ["custom_collection" => ["id" => 841564295, "handle" => "ipods", "title" => "IPods", "updated_at" => "2008-02-01T19:00:00-05:00", "body_html" => "<p>The best selling ipod ever</p>", "published_at" => "2008-02-01T19:00:00-05:00", "sort_order" => "manual", "template_suffix" => null, "products_count" => 1, "published_scope" => "web", "admin_graphql_api_id" => "gid://shopify/Collection/841564295", "image" => ["created_at" => "2024-01-02T09:28:43-05:00", "alt" => "MP3 Player 8gb", "width" => 123, "height" => 456, "src" => "https://cdn.shopify.com/s/files/1/0005/4838/0009/collections/ipod_nano_8gb.jpg?v=1704205723"]]]
                )),
                "https://test-shop.myshopify.io/admin/api/2024-07/custom_collections/841564295.json",
                "GET",
                null,
                [
                    "X-Shopify-Access-Token: this_is_a_test_token",
                ],
            ),
        ]);

        CustomCollection::find(
            $this->test_session,
            841564295,
            [],
            [],
        );
    }

    /**

     *
     * @return void
     */
    public function test_8(): void
    {
        $this->mockTransportRequests([
            new MockRequest(
                $this->buildMockHttpResponse(200, json_encode(
                  ["custom_collection" => ["title" => "IPods", "handle" => "ipods", "body_html" => "<p>The best selling ipod ever</p>", "id" => 841564295, "updated_at" => "2024-01-02T09:30:46-05:00", "published_at" => "2008-02-01T19:00:00-05:00", "sort_order" => "manual", "template_suffix" => null, "published_scope" => "web", "admin_graphql_api_id" => "gid://shopify/Collection/841564295", "image" => ["created_at" => "2024-01-02T09:28:43-05:00", "alt" => "MP3 Player 8gb", "width" => 123, "height" => 456, "src" => "https://cdn.shopify.com/s/files/1/0005/4838/0009/collections/ipod_nano_8gb.jpg?v=1704205723"]]]
                )),
                "https://test-shop.myshopify.io/admin/api/2024-07/custom_collections/841564295.json",
                "PUT",
                null,
                [
                    "X-Shopify-Access-Token: this_is_a_test_token",
                ],
                json_encode(["custom_collection" => ["collects" => [["product_id" => 921728736, "position" => 1], ["id" => 455204334, "position" => 2]]]]),
            ),
        ]);

        $custom_collection = new CustomCollection($this->test_session);
        $custom_collection->id = 841564295;
        $custom_collection->collects = [
            [
                "product_id" => 921728736,
                "position" => 1
            ],
            [
                "id" => 455204334,
                "position" => 2
            ]
        ];
        $custom_collection->save();
    }

    /**

     *
     * @return void
     */
    public function test_9(): void
    {
        $this->mockTransportRequests([
            new MockRequest(
                $this->buildMockHttpResponse(200, json_encode(
                  ["custom_collection" => ["title" => "IPods", "handle" => "ipods", "body_html" => "<p>The best selling ipod ever</p>", "id" => 841564295, "updated_at" => "2008-02-01T19:00:00-05:00", "published_at" => "2008-02-01T19:00:00-05:00", "sort_order" => "manual", "template_suffix" => null, "published_scope" => "web", "admin_graphql_api_id" => "gid://shopify/Collection/841564295", "image" => ["created_at" => "2024-01-02T09:28:43-05:00", "alt" => "MP3 Player 8gb", "width" => 123, "height" => 456, "src" => "https://cdn.shopify.com/s/files/1/0005/4838/0009/collections/ipod_nano_8gb.jpg?v=1704205723"]]]
                )),
                "https://test-shop.myshopify.io/admin/api/2024-07/custom_collections/841564295.json",
                "PUT",
                null,
                [
                    "X-Shopify-Access-Token: this_is_a_test_token",
                ],
                json_encode(["custom_collection" => ["metafields" => [["key" => "new", "value" => "newvalue", "type" => "single_line_text_field", "namespace" => "global"]]]]),
            ),
        ]);

        $custom_collection = new CustomCollection($this->test_session);
        $custom_collection->id = 841564295;
        $custom_collection->metafields = [
            [
                "key" => "new",
                "value" => "newvalue",
                "type" => "single_line_text_field",
                "namespace" => "global"
            ]
        ];
        $custom_collection->save();
    }

    /**

     *
     * @return void
     */
    public function test_10(): void
    {
        $this->mockTransportRequests([
            new MockRequest(
                $this->buildMockHttpResponse(200, json_encode(
                  ["custom_collection" => ["title" => "IPods", "handle" => "ipods", "body_html" => "<p>The best selling ipod ever</p>", "id" => 841564295, "published_at" => null, "updated_at" => "2024-01-02T09:30:36-05:00", "sort_order" => "manual", "template_suffix" => null, "published_scope" => "web", "admin_graphql_api_id" => "gid://shopify/Collection/841564295", "image" => ["created_at" => "2024-01-02T09:28:43-05:00", "alt" => "MP3 Player 8gb", "width" => 123, "height" => 456, "src" => "https://cdn.shopify.com/s/files/1/0005/4838/0009/collections/ipod_nano_8gb.jpg?v=1704205723"]]]
                )),
                "https://test-shop.myshopify.io/admin/api/2024-07/custom_collections/841564295.json",
                "PUT",
                null,
                [
                    "X-Shopify-Access-Token: this_is_a_test_token",
                ],
                json_encode(["custom_collection" => ["published" => false]]),
            ),
        ]);

        $custom_collection = new CustomCollection($this->test_session);
        $custom_collection->id = 841564295;
        $custom_collection->published = false;
        $custom_collection->save();
    }

    /**

     *
     * @return void
     */
    public function test_11(): void
    {
        $this->mockTransportRequests([
            new MockRequest(
                $this->buildMockHttpResponse(200, json_encode(
                  ["custom_collection" => ["title" => "IPods", "handle" => "ipods", "body_html" => "<p>The best selling ipod ever</p>", "id" => 841564295, "published_at" => "2024-01-02T09:30:25-05:00", "updated_at" => "2024-01-02T09:30:25-05:00", "sort_order" => "manual", "template_suffix" => null, "published_scope" => "web", "admin_graphql_api_id" => "gid://shopify/Collection/841564295", "image" => ["created_at" => "2024-01-02T09:28:43-05:00", "alt" => "MP3 Player 8gb", "width" => 123, "height" => 456, "src" => "https://cdn.shopify.com/s/files/1/0005/4838/0009/collections/ipod_nano_8gb.jpg?v=1704205723"]]]
                )),
                "https://test-shop.myshopify.io/admin/api/2024-07/custom_collections/841564295.json",
                "PUT",
                null,
                [
                    "X-Shopify-Access-Token: this_is_a_test_token",
                ],
                json_encode(["custom_collection" => ["published" => true]]),
            ),
        ]);

        $custom_collection = new CustomCollection($this->test_session);
        $custom_collection->id = 841564295;
        $custom_collection->published = true;
        $custom_collection->save();
    }

    /**

     *
     * @return void
     */
    public function test_12(): void
    {
        $this->mockTransportRequests([
            new MockRequest(
                $this->buildMockHttpResponse(200, json_encode(
                  ["custom_collection" => ["body_html" => "<p>The best selling ipod ever</p>", "handle" => "ipods", "updated_at" => "2024-01-02T09:30:37-05:00", "id" => 841564295, "sort_order" => "manual", "title" => "IPods", "template_suffix" => null, "published_at" => "2008-02-01T19:00:00-05:00", "published_scope" => "web", "admin_graphql_api_id" => "gid://shopify/Collection/841564295"]]
                )),
                "https://test-shop.myshopify.io/admin/api/2024-07/custom_collections/841564295.json",
                "PUT",
                null,
                [
                    "X-Shopify-Access-Token: this_is_a_test_token",
                ],
                json_encode(["custom_collection" => ["image" => "", "updated_at" => "2024-01-02T09:30:36-05:00", "title" => "IPods", "handle" => "ipods", "body_html" => "<p>The best selling ipod ever</p>", "published_at" => "2008-02-01T19:00:00-05:00", "sort_order" => "manual", "template_suffix" => null, "published_scope" => "web", "admin_graphql_api_id" => "gid://shopify/Collection/841564295"]]),
            ),
        ]);

        $custom_collection = new CustomCollection($this->test_session);
        $custom_collection->id = 841564295;
        $custom_collection->image = "";
        $custom_collection->updated_at = "2024-01-02T09:30:36-05:00";
        $custom_collection->title = "IPods";
        $custom_collection->handle = "ipods";
        $custom_collection->body_html = "<p>The best selling ipod ever</p>";
        $custom_collection->published_at = "2008-02-01T19:00:00-05:00";
        $custom_collection->sort_order = "manual";
        $custom_collection->template_suffix = null;
        $custom_collection->published_scope = "web";
        $custom_collection->admin_graphql_api_id = "gid://shopify/Collection/841564295";
        $custom_collection->save();
    }

    /**

     *
     * @return void
     */
    public function test_13(): void
    {
        $this->mockTransportRequests([
            new MockRequest(
                $this->buildMockHttpResponse(200, json_encode(
                  ["custom_collection" => ["updated_at" => "2024-01-02T09:30:21-05:00", "id" => 841564295, "title" => "IPods", "handle" => "ipods", "body_html" => "<p>The best selling ipod ever</p>", "published_at" => "2008-02-01T19:00:00-05:00", "sort_order" => "manual", "template_suffix" => null, "published_scope" => "web", "admin_graphql_api_id" => "gid://shopify/Collection/841564295", "image" => ["created_at" => "2024-01-02T09:30:21-05:00", "alt" => "Rails logo", "width" => 110, "height" => 140, "src" => "https://cdn.shopify.com/s/files/1/0005/4838/0009/collections/fd43f2c8883f6e9b680e3295fd990d2c.gif?v=1704205821"]]]
                )),
                "https://test-shop.myshopify.io/admin/api/2024-07/custom_collections/841564295.json",
                "PUT",
                null,
                [
                    "X-Shopify-Access-Token: this_is_a_test_token",
                ],
                json_encode(["custom_collection" => ["image" => ["attachment" => "R0lGODlhbgCMAPf/APbr48VySrxTO7IgKt2qmKQdJeK8lsFjROG5p/nz7Zg3\nMNmnd7Q1MLNVS9GId71hSJMZIuzTu4UtKbeEeakhKMl8U8WYjfr18YQaIbAf\nKKwhKdKzqpQtLebFortOOejKrOjZ1Mt7aMNpVbAqLLV7bsNqR+3WwMqEWenN\nsZYxL/Ddy/Pm2e7ZxLlUQrIjNPXp3bU5MbhENbEtLtqhj5ZQTfHh0bMxL7Ip\nNsNyUYkZIrZJPcqGdYIUHb5aPKkeJnoUHd2yiJkiLKYiKLRFOsyJXKVDO8up\nosFaS+TBnK4kKti5sNaYg/z49aqYl5kqLrljUtORfMOlo/36+H4ZH8yDYq0f\nKKFYTaU9MrY8MrZBNXwXHpgaIdGVYu/byLZNP9SaZLIyOuXCtHkpJst+Wpcm\nLMyCa8BfP9GMb9KQdPDd1PPk1sd5VP79/L5dQZ0bI9+ymqssK9WcfIoXHdzG\nxdWWfteib79lSr1YP86MYurQxKdcUKdMQr5ZSfPs6YEZH8uhl4oWIenMuurQ\nttmejaqoqsqBVaAcJLlJN5kvMLlZRMNsSL5fRak0LbdQQMVvSPjw6cJnRpkf\nKtmjhvfu5cJtT7IuOMVvWLY/M/37+o0YH9ibhtSYdObErc6HarM9NnYSGNGR\navLi09unje3WyeO8rsVrT7tdRtK3uffu6NWeaL9pTJIjJrM4NPbx8cdyX7M7\nPYYVHu7j4KgoNJAYIKtkV5o9MsOcldicis+RYNutfrhFOZ0hJbqinZ8bI8h5\nUObFuOfItJsfJrJfUOfIqc+PXqQtK8RnSbA4Mcd3Tm0SGbpXQ8aqp7RLNs+s\novHfzpVhV9iggMd1TLtbRKUdKXEQFsd4XrZRPLIgMZUeJ+jKvrAlK6AhJ65A\nMpMpKuC3j5obIsRwS7hAN8l/YtvDvnYXHbAoLI47SIUsOMenorF4gO/m4+fH\npo4vLZ8oKMukqp0cJbhVSMV2UuPR0bAfMLIrLrg/OcJwT8h+Vt+wn8eurLlh\nQrIfKHQOHHQOHf///////yH5BAEAAP8ALAAAAABuAIwAAAj/AP8JHDhQXjpz\n/PopXNiPn0OHDRMmbKhQIsOJFS1SxAhxI8SHFzVeDBnx48iNBAeeOkcxokeX\nFRdOnAlSokaaLXNujJkxo8iYHRkKtWkzZSsaOXkAWsoUECynsHgoqEW1qtVa\nU7Mq2Mq1K9cUW8GKTUG2rNkUHNByWMuWLdWva7t1W7UKG4S7eO/ycEhQHgaK\nsL4VGGyocGE3br5929KuxQFFkEtIlgypsuUDmDMfWGRmUZvPoEHfGU36jgDT\nLQSoVt3IQ2sPsL0IUNZGlZ0H0lo00jEkCytWMspdGzBgn/F9EBIWnKIQlqHB\nhA0bQpx48Z7UAkoEcMTdUeTJJSxf/4akOTNnzqHb3GkjrUdp0gKwq77jWdod\nO7dNKWvhRUcWT6zYQI82xB03AAQNCdTKX/xAAB10hfVCnRtbVIhIAy14oJoZ\nAXS4XXfdQaYIeOGJRx555Z1nRnrqqUeaMtIYY8dmn7Vg2yK57TYEgAzIQGBx\nxyXHj0A0OOTggxFKSN1iWwTTAIYanpYdMtFE4+GVIHrn3XeUmVhZeWiIMoOY\nnVQDGiTgKALJjIssIsADt0mjjI6+AXcDgQYi2M8/7ijEwzRIFmBIL9NVV+EW\nVzyZ4Wqj9RBABchQWeWkV3aY5ZYjjgieeKL446mnjxwAiZVpliAjZqblt19/\n/7HCwIAFGv+X3J4s9fMckoYhphiTQTwJ5Wqn9dDDAWuMUUEFviTrS6STVlmp\npVmKqCkOn34aB6TIBAAOJeHZAYl6ptixSCL8edGbq8HFeqBDcygEyIOCGqYk\nkxUW4euiq7knbA/gUDHGv//ec2wFayQbaQWinOCslVhmSUq1/gCDLJXacgtJ\nCYu4J66cjbAKoA3CxapnOgm9g+ughdK7xYX3Rinlvj2YYcYanVBBhTg2Axzw\nG4/4k4bBzDZbKRUQP1LIsRSX6sgBZtwhzQP68ccbj7AWty4/5igEoaC9dK3r\noVtgs4evvzKqb8wyQ0JFJzXXbDMVcQBQLTDGVmCssstKGs09oPT/jQcRoBw9\nMamKgEOeeg/gqBtvdVZSDnHFIQgRD4RxXWhiYEOQKNn4zncHzDIzHc0ZpHdy\nRicIQOypKDf7q3Pd96ABzSab+E1EIYIvS2o0ijA92gPZiCB1qwL+iJxL78Z7\n2NeHQrAK2YrCZva+bcgcujFUQIEG6WigonoCdLT9tr9UbIIAMMCEkkYacvvT\nxSgsBPKGJKBEAw4yjhx+hyn+PAJFfztyVdWOt5B3RehyimneFuwFvQxFyTSf\n25f1zCAqSFACDXTQ3gwSoDoElI5tZyBAINqnuhJ+Kg9vOIOaVnSHT5ECHucK\n0OMiBxJAPCdXmGseBLoBvei5rFEStB5m/yBhjFJUIw50oIMoLvCpFRAADduj\nwxvUYMIqmvARCBiDeiwRBk+lQQTEq5qQ3CWdJSkGAlu4y9h66EBgAbF6QhSV\nMUpQilKcQRNLwIenfpFEJebBioC0ohrQQJ8QhMIfSwhgj2YouYTYUEmGqhBe\nFNBDH5otgmgLnRyLWMdq0GEGCMCHJjSBjzQE8pSChMLTCJBI4pXDBeuiiA1T\nprK7PK+SUPphsIQ1wSEag5OUKIUlyiAmAowClci0YizKILUAFi+WDQEEJOmF\nxlnMYnOVbOP0gkjBTdZRmDiwhCuywcRkmtOEpHjC1DzBABto4xqN5AcgdEXN\nNO4Ql0+CB2xctv9LM2SSgpXhZB0t0QlT+iMUkzinQquFihD452P0gGdGAPGN\nHKYxjbOAwBpxqU9+ApGXQgyoQDWRgASwoAMGMMAHDrnQhc5AkQPSU0NgYVF7\nQmAWKcBnPvc5HwGcbUVxJCInEfACQXQACUhFQkqRwAIOttScv9ABO21wA8k1\np5Z3mYXYdNqAjvLzbHDUpFCNIQoUdGAdHUhrUg2gVAOg4AXmvEAaOPEGaCCA\nAASQxBtIYYIq5kEHAaKHVfsRGB3eNBPYxKdXGVWGUnAzdOSxgyg+MIxhoDWt\nal3rUlXABEBeYBQIiMMm0AAKPBBAE1A4nTjWEIAzvGEFqsvDEHqEjZj/wMKw\n1rwlVxerGkv4AxVoAOkEmXGMOKDgA8i1LFrRioSjKrWtKRVEQlXHBBSKQhLQ\nEG3tCHCLJaSWClD0zgHO8LBqDeIYNsDGTG4ryZtak4G7lZ6G2sBSfyCAaTK7\nAzfgQIEzoOC/yKVsZS+bWeim1BsdqEG10oCANxDgDZwIRHa3O4hbaA91nlKB\nKA7QBhHo0VPwCFBtAdNea86CZVztKk8FUN5PjQIHxKWABihQBkHY+L/HTa5l\nMetcAxvAG94wQAQAkA1SIIAUBvUHdkVLgBkMwrvkPSEkVtSCJ/yCAJ5gZ20l\nwgObziITGk3xTqUHhWoxYQVdAIYINMBmO0TA/8aCwHGOBbwOAvc4pXj2RieY\nIY69ttgfpJBEHOLQ5ArTAQ2SaPAb4lAC33XsoaxYhUx4kFVrZoKSYlYxbOzg\nPX8kAM1d6AILOuEDDQzBBCaIwJvhjOMAU7bOmE0qdMUhhFozQhVxiMWnuiAJ\nQTfZyahFQydWGwA1cbiZAJL0Qiht6UzoVsxetUQaJhEKZzhDBdh+A5s9AQxU\nq3rVN241ne0sa1rXWgjbqLUd3uqPUYhCFNDAxwzm3d3vjgF/vTvAHegUaYbw\nwMSZyAR8oX0I2BwiC2eoQQ2srYJA6IDNb2ABqr39bVYDWMfkRgIVzs1xdEOD\nCjhQ4nXlPe9BaOLQNf+rRjQc0eg2DM8TyvZTs3mY6Xwy4xI2YLMGdIAAhTvD\nFWzuhKhZIHGKq9riF381rDtQho53/Bjpboc1OiEJktMbtaplrbHboCOYT9rS\nOdhopocwgiRowOw6L0MNCKCBKjwA26IW9cRTXfE4i1vAlpUEHJze8XTXehvc\n2AQ05k3vDHaiDGNYeaPNoAzGxbwf/86EHDCd4kbsyBMySII2NH92nevg4TbI\nA7ZVEGqiF93ocLb7nIdhgGMIoROW4Dvft2GHOqQiDoM3+YWJnT8O7yYL3fgI\nDwK+CrFX0lwBctUxtLH55qNd5xkYxMKvDffSn/7b4L47JYQgjnW0XvZOv0L/\nKmz/BS5sIg5QvtkavDPlO/Am+FzOBCBqgU8veEJA9LCBDRjQznIw3/lJEIBs\n5gqhUIALN3rWR3QTh31IFwcUkAiV1QEOCH4ddw8LkAqpUH5cgAtnIGzikHgs\nxzSW1w3+Jgc0Bz32Rw8DoA3lQA8yIAP6xwoj4H//B4BJYAOjoAZqYIDWRn0J\nuIB1Z3fHQAGdgHeJQIEcxwwLQH5csIHEQARE4C9aRx49oAPw5ydyIHaANUPE\nwXwtmH/6Vw5iKIb/F4DaoAGisAIroIM7WG0MR3pDd3qoJwjVQAEUAAdvEGAG\nsHcUgITFgAtLmIFNiAtQeAInMAa+UGwiyAEW8QMc//AkgKUNx7EPkLOCLOiC\nNiADIzCDY0iDm2cHLxCKbNiGPueDcVh02McJ/GWHjfABxyUJdigEfUiB+pAL\ndVAHX1B+uPCERHAChSAw8QAOHMaIE6EF3MAKkjiJxlGJljgC+UcPm7iJnch8\nDJAHoRiKaqiDBRgK01d9LDB0QFiHdmiH1YACSDCE4ziLsscIdRCIGriLhfiL\naxAPOKAKtbARPFAFQKKMywg5XuiC9ACN0TiNOwAAAHCNL5CN2siN3QiHcYhq\nwCAD6WiHomAJEzmO4LcGueCOG4gLf2OIAjOPOHCPEEFT/KiMzKgNLigDABmN\nnKgL02aQB3mNCkmKB+iNCv+IBjI2Y+O4ihcZi063DcywkReYi04Yj/ewBmuA\nAyRYEbAAAVVwkv3oj9rwgizJks4okCMwCI+ACqgwCQaJkGq4hm3IjW8YakPn\nCWxmhzz5kxfJd3iwkUx4lL0ojw/QlAnxlG4glQYCOStplS8YkJuoCwnwCIY5\nCYgZljRJlqTYg9WnbTq3lm3plrGojrVWixuJgRpIDB95AgLTCCRYkjeVAXw5\nlfqXiVa5ks64QSVlmF8JljO5mAtplj4IdJE5YzpHmenYcXCwAHKJi7rIi74Y\nD7oQms1xU71QmpQ4AOVwmvoHmAH5ABcwna3pmompmAnJmDzIcGp5m2upmxMp\ni+f/Zg9AIJeCeJSG+ACHAH8OwWyzoJyUCIOnCYOAKQP4wATTeQElVZio8AiI\nCZtiSZbbuHAIUAXemZu5CZ4YyQ250KAXeJ6c2YsCYIUYwWyZUADK6QoEwAfO\nOZ8yoANSwAT4SZ37eZjXGZtjOZshoAFQ8HAHOo6TCZ5CgAfluYS4OIhPGA8C\n4AXBtxBP+WXvWZrZ4ClhYAkdmokzgAkhKqIjqp+GaaIyGaAL+XDOEAEueqC4\nGaNuKQTWAAQ1OpceCQktcAgcYFuHJQc+wJfhADFpsAPhcJpewAZKKgVL2qTV\n2ZUnKptqMApJ8ADVZqVYKpkKaodwEAflaYvAuYFE4HIe/8CIEWGhchCkJ7kE\nJQQAHGoDZcYGckqnTGqnhWmiALqYS5AEdGCAVmqgBvqiMqagquANX3qe8cCo\njpqX1iQHsAALaWogx5FkEBMO7URCmjqnTJqfJQql2LkClpAEwNCGahABapmq\nqqqgjAAE3uCgTFgC6tEIZVoRzCYHckBpJ+kBJoQA+xcCqrOpdeqpT/qf2JkF\nSQAPOdiGLoqq0QqeVOCqDUp+RMBh+7atDgELX+atPJCPKOkAJmQJ7fRH54oJ\nc7qk+amfn+qfsAkAKqB5SeAFo7CGwBCo3smWlMkMQPaqyAAJi2AaKTBpECB5\nUdFlKJk6qoMK/McHVsSwdFqnxP9aUv3JrgRghhcbCCswqp0XmdAamTtJmXHg\nqjWaCmqCIwJwsg/RrSvLA6R5HDIAAyJAAJ3mKQQAAwxwC4Akp8Iqog9bna+5\nA2V4g+kUgM/HZlUwtB2rparwYzWKB/nzAG3QtBVaq1HxA5+wl8cBA1iABTCg\nCyGgsK7Af1lrReiariTKn6ggAmTIfDfIAJuntt7pth2bjnAABHKbC74ADi13\nByfLrQG7sp/AA8dBD4EruIILAy0ABboAA66ATMHKqcMKsZ/aCNMouWrbu2vb\nthw7kdUgt3VgP41WsinwEPzwb7NgqzzwA3xrCMYBuKu7ujBwvTBAAOYEtrbr\nqQkwg5z/GLmVa7GWy7EJmo7ccGB4gAxp8i3SMLoNEXnOywOf8AmwsA/aUL3V\ni726QELJtLi3W1ICWQ7SGLm+67tCi6UeSwGb8GOFkC1L+74uAbAq+7z1Sw0F\nwACXcAmBy8H6O7sLxb22O52k4IwD2Yk0SL69a763KWOJgAQLACnFBgl267Qy\nV8H0+wnUgAEb3MMbrL/a+1SaWrNMSgpYqZUEPIY1qMICyMJtCQSB4wv2czjw\nC3mla8E6nAzcEA4+jAU/HLiJG8IAbMRW6ZLgq8S8e8BOPGM4cDtSDLqboQD4\neMV8m8VXkAV47MMeDMJP9SmLiw82oAOpicThm8IHXL6BSgEn/4AHhbAsaRLH\nMSG/e3vBjojHWRADeowFg9DHEMO9DmADDjAK1ZCaLknAhZzGaoyl3IALXHAC\nMry0cjwR8juwz0sN1OBs3HDJlpwFl8DLvMrJnqKpUADKIUoKD1DGpVzAZ3vI\nWKoIxNDKr0yysRy/dKzDP3BTChADunzJlxAOygDMJkQANlAGmMCk+CDI0KiV\nBYzGh9zEOmcDRPCEjEwlI3IACtARkmzB1JBRs9AN3KDN2mzJZQDOJRQGNmAH\nDSuiyhCYL2jGKIzKCMxmdwCFRMDIb9xo07y8V1y/14wXVxADIA3QWRDEBF0t\nBi0CAOwKgDkCmmjGpzy+anwPvbjIJ//gyBitvLNswRmVVewQ0iL9yyVt0PVA\nAIsLBfVJytK4zuXQzknADIZoiIVABNEsx8vWvN/6vJRmU6vw0T4tsyWtOvxn\nA+EABQCgpID8gqh5lQ6dxGR4yIrgi78o01MdyVY9sJ+QCd+ARlmVzT490F8N\nMTEQ1gwQDiGwPh260i2dzJ3Yu8eAO/fw2BVwD408w7UAEv9mqyubQBe1Q/98\nCCA9A38NMSLAf4JtAyFw2Gnd0Il9wmKotm0Q10o5j41svFQtc/M7CwmU1/ZU\nC559CLrwC6FdLSFA2sR9pB5anw4dvlUZDyE5j/SINKBb2RRx2ZldHUxyFxwQ\nA70d3NUCBa7/QtyljdrIvdZj6AFKGQ/oTY84YA8PnCb3ON11PQv0dN0QgA1X\noAuH4Fvc7SkIwABcC97hfdiIvdrgSwnOrd72QAkGDsHSnRDD57wS0g4NcAVb\ncN1bkAKHcAh+vd95cL3+DeABPp+pjcybeAnojQMobg8JTgmqQAlSrAjSHb8q\nOwvT0QDocOMTQAJ6UARk4M+HANr77SnY6+Egrn/tdKTjHY2LkOIqruCq8OR2\n8MYk6ScqSyiGQAI3fuNRsOVRMAEKcAjAHeT+cARD/t8g3k5HLuJHLQMMYA/r\nreAsbhv48QCUYD8NDnmSR+MF0At/YARGoOXoEAW8QAscMARhHNwh/1DmHm7m\nxZ3mxw2Y1rDicY4ft/EAlp4tlS3LkndD3ODnfp7lW14EW7AHYu4pg9C6Zc5/\njE7a+4fkad3iTy7nlW4KtC4N9hAAU47nR1IAwtAMno4Of77labQHrVDqYWC9\nis61qx7i83kIsU7plk7rppAI1G4K0UCSDp4JbgAdJNAMvv7pOL4YViAPpe4P\n+pvsy87qrT6ftQHtiUPr1K4M+9EC9nDnlOYDg+EDf+Dt3/7n6EALi0EL+VDu\nD4DsqI69ql7kjo4F7r4IpiAN8T7vjdAIdmDv74DvPsAN/O7tv14EiUECUQAC\npV4G+ovsqf7hAH6a1jDr8E7tLaAbE+8FMv//3n6S79MwBDuw7xzv6e2gGBMQ\nBadQ6gSABQ5AAA4gAodg8kOe8GduCu8O8S7/8jHfH5/HDiWRDH6QA9hwK4PB\nDfbyBLRAAtPxDbaw5X0g5mlwCXzsMwgABUdw8Aif7ocg7fEu9VP/eUPwCmDw\nAzPxA+TgBxgQ+BBgMpUjKNQR6FEwB6WuDJdw6AAQuMnO9KQNI3UP8x0DQHoP\nBmBABnuxEH4f+KAP+LitPNNRDFq+DCN/CSQt3Psb+fyXBZU/8ZevA5mv+Zqf\nAz/AED+gBeQA+r4f+DkAAShTBKAu8kFOAOFQDQV97oqu6o0g8TFP+7Vv+5Ug\nC9+q+1PQ+7//+1n/DwFF4O/osAFiDgB4DNT+UPDWC/lljgV23zF5b/vwXwny\njw3f+hE/kP1TsP36/wxNABBNeEVBp87fQYQJFS5k2NBOjGoEwvxKSOASFowZ\nscDgyHFIo0ZehrwCU9JkyUopK8nKlIkHP379+P2YMoUcBpw5deZ8RohQE6Cn\nGg4lOnRGDKRZsoS7pMPSA6YXNWLsKJLkSZOVwKhMGSTTrJf9ZNKcomXKTrQY\nevr02cSIvKJxi6aJkaVuXaZMs1ziO5UqPawnuXK9AWEW2Jhja9pMuzMd27YW\nLNga10fuZYUPkdZdqpTv575YbJQbkCHw1sEpb9wQMstwWLFkbfppjJPc/wTI\nhHhJ5r0BBGbMRzfb7ez5MwwbpTMsx5pa9eob2CBM5yETpmzGtTE8hrybN29b\nc1oBn6trc9K7nhmUy6BcOUrn0KHLcr0FQvWYMxdnb3w7t/fvwFMiFvKG0uw8\n4kRLYjkGG0RtMPlWc+GGdyCwbwtYrOsHu7K0a+K/AEO04K0CF8InBvPOg2GE\nKpZTrsHSUotwwgnnmW4LHGGBKbb9bMqhsSly082CW0QMkDLLSvQHFQFiOESX\nLGzQpkUY22swA8Lko9EFLqfBEcdvMhRrwx610OLHtJ5Rc01ahHnCzTeFkXNO\nOfWQkwQ6NNFzTz2X0GQJQAMVdJEYsBhBAyrbK/9tgBcbrCTCG7bkkstvvvwm\nzPzI7JEcNLXDCYICQhXVkAIMMdWQd0x1Y9VdiuHGA1hjhfWQQzyg9dZDYmBg\nyioSVfRKFwfYZ8ZIJ3XhGhe83OLSSwEZU78ea+pUO2wK8MFaUUMl9dReDOll\n1VXbuYIZWWOl1dZDLpGhV3YZXLTR9vZhUMJijUX2mmveYRZcQDLlsCZOp21s\nCx+uLTjbbE/11ttv3diFkSHKRReGcthtN1hgrdxH2Awk5fJefK+ZZ9lvVvXW\n2cT+ZSwHgdHCpmCYDb4WYVNL7baXbsN9FdYYbKDA4otddBdYeffZx9iPjw35\nmmlKNtnUfmXSNNqAW9b/6eWYY8YWYW0V7tYQhxWAwwege61y6OXkbdDoSUFe\nWuR3wP3akKhjUtlHlqklG+YqsjaY620VNgQDMcQQouwrX3zR6KKFZfttyKtw\n+utQnRUL2mjLYjnvtLDpu9e9/ZYZ8FK3maLwwn8OmlF3lWNc7df3gfzteaZZ\n+NTKx5y6RxJ69/333mvBwHOLQ/fhiR2SV34HS47hmnAafJ9gh3AaDMcB7LE/\nIoPY441dhOzDz94VN3DPNmoeM5drAyfK7lWH34baYetVCidBIT6C5UMhB4r2\nn3FheSANRVGCwhBmObtlbgqXyYYNyuYFAMQFCtPwQf3spxAraGBRR+Af91wX\n/zsPoCIuCCAV13yAMsWo7zIOaJHFSHEZHZABdWK4X0JoIAENLIeDCXFA2rgX\nuwG8MC6kKGGoZuaDTEhtd/vBTBoyYLYqeAEzFpihGCagEBqIQQJVGMAOEdLD\n2L0uHJdBAMIOhsTELHExwLnS/i6zAQlIQItWxKIccejGL/4wjPvw4kHSQApA\nBhKQUDCiEWE2C93dTSEW2EMjaWABhbgnA3g8SAj4cElK+kMJWoyjBK6YECtw\nUgKZ7N8ejdZHfzjgGgNY5SpnZsisJXFHikwICTLBskzUECFtxJ/FFKKETmrx\nkwixQiclYAX+mfKUCpnBEZzpzHpkS2Yxm0ViMNcjhf+QABs5uKUuD9KoTOaP\nQb80picxaExk8lCZfIxLNuBhrWnurZpjoiVCbAkBbnrTH2pbTjgZVAVyGnOY\nBylmJ9P5xXWOUS6WEB3ZqgmTazLxMk40WntQub3lbIOc7OjkQP1RUI4e9CCl\nfJ3jjCbEogDAE6KrAiKlVs+4gJF7GUDlDLLnUWCyg6Ps8GgxdyrSVK5zH/WI\noARjZjFEQhSmRCEFg9SGSqIoQadT7alOJcAOoJJUmeFA6VBIETqk+ssPKizK\nDorxwx9CdShSvapOqzpVoO7ApMocgAdcIb74HeSroEOqEn8w1mgVRR0KyEEw\nKqoctTZEquzggFsVooepskP/DwqZAAfmakpGvc4HXSXF54CWVLthALASRYhB\nFpmDd4QxsQxRQmNd61HITnWyCVHC9MTnCsY9U7dH4AM8spGQvVrsiRB4Fg/8\ncFxsJmQDHvUHLQyhWsy01rXs2MFj2ZGC6862KKRgHGY6K9zlEPdyP8AJcteo\n3ClsQCHq0AF0QdkN+HbjlxygL31hO13tMrW7lwkB0BiUoR3x4EfmrYlCNjAF\nCRAoIWmwQexQqQcyxHe+9eXAfVOQAg7k16v7jQsAHGi2Bv0gUzyQQ05Ga+Cy\n0MBEDsZgN8gQ4QnXt7oJ0QOGOZACDTeEu0aTCwC80EKhDcAHMDGHWATMsuMC\nFsVl/9GnP0Jg0kw24MUv/qUTOGDlCj8WETfGsVx2vI+UzsATIFZUaTIRk3QY\n+ZYlFq0Ce5QJHBXgdU+MRCSwEYlVBCHPQZhyn7vhhD9fWdAc2DKhKXxhRCc6\n0Yi4LOPcl6hGVUFqc4gJLGaxufKO1s2VkrOj63znOkciCKMedZ+n7ARUp1rQ\niLAyIlyNYURcONaInrWs9ci4JyJOaFYawDzP8Q+ZwAICLckbgd08i290eh9V\nCIadQw3qO5Oa1H1GNRlSjeorO2HLruZ2rLudAm+Dm9Gxcx/GXmSIMbnjH5W2\nzy2RbOzM+cENBRAWs0N9b3zXWdp8pra1r61tbXdb4N/2Nv8i5gzeIJd5Gjui\nwT+AzQ9YVGrYnNO0Agm27GBkvNnNzje+921qf/+b1QEfuMDFPe5lk/lspUG3\nWKbQCofLBBBuwNEs3C3aikcrB2TTeM81HgmOd3zf/PZ3yFPNaqSXfODF0EDK\nE9e6liZmCvJwOLD7AQhU2efSbG6zm7VgiG1ofBc+//nGgZ7vbYw67aVux4v/\nfXSSK53by/HVrzIwDZTBBANUrzpMeAAIWASeB4P/AQ9+cHjEJx7xWgDE5nLQ\neMdHXvKbg/zkMZ23H/1oFRjYPOc9v3nQ58Aw0xn9LACvO7HQAOZVf/jl0ii1\nHcXe9bPX3euftaPL5R71tIf97nsy7/o0WlP2r4/JOU7B+r5nqva7jz1EdZ97\n4qNe+bonfvCfVXvly1762beOOdLBd+Q7PCAAOw==\n", "alt" => "Rails logo"]]]),
            ),
        ]);

        $custom_collection = new CustomCollection($this->test_session);
        $custom_collection->id = 841564295;
        $custom_collection->image = [
            "attachment" => "R0lGODlhbgCMAPf/APbr48VySrxTO7IgKt2qmKQdJeK8lsFjROG5p/nz7Zg3\nMNmnd7Q1MLNVS9GId71hSJMZIuzTu4UtKbeEeakhKMl8U8WYjfr18YQaIbAf\nKKwhKdKzqpQtLebFortOOejKrOjZ1Mt7aMNpVbAqLLV7bsNqR+3WwMqEWenN\nsZYxL/Ddy/Pm2e7ZxLlUQrIjNPXp3bU5MbhENbEtLtqhj5ZQTfHh0bMxL7Ip\nNsNyUYkZIrZJPcqGdYIUHb5aPKkeJnoUHd2yiJkiLKYiKLRFOsyJXKVDO8up\nosFaS+TBnK4kKti5sNaYg/z49aqYl5kqLrljUtORfMOlo/36+H4ZH8yDYq0f\nKKFYTaU9MrY8MrZBNXwXHpgaIdGVYu/byLZNP9SaZLIyOuXCtHkpJst+Wpcm\nLMyCa8BfP9GMb9KQdPDd1PPk1sd5VP79/L5dQZ0bI9+ymqssK9WcfIoXHdzG\nxdWWfteib79lSr1YP86MYurQxKdcUKdMQr5ZSfPs6YEZH8uhl4oWIenMuurQ\nttmejaqoqsqBVaAcJLlJN5kvMLlZRMNsSL5fRak0LbdQQMVvSPjw6cJnRpkf\nKtmjhvfu5cJtT7IuOMVvWLY/M/37+o0YH9ibhtSYdObErc6HarM9NnYSGNGR\navLi09unje3WyeO8rsVrT7tdRtK3uffu6NWeaL9pTJIjJrM4NPbx8cdyX7M7\nPYYVHu7j4KgoNJAYIKtkV5o9MsOcldicis+RYNutfrhFOZ0hJbqinZ8bI8h5\nUObFuOfItJsfJrJfUOfIqc+PXqQtK8RnSbA4Mcd3Tm0SGbpXQ8aqp7RLNs+s\novHfzpVhV9iggMd1TLtbRKUdKXEQFsd4XrZRPLIgMZUeJ+jKvrAlK6AhJ65A\nMpMpKuC3j5obIsRwS7hAN8l/YtvDvnYXHbAoLI47SIUsOMenorF4gO/m4+fH\npo4vLZ8oKMukqp0cJbhVSMV2UuPR0bAfMLIrLrg/OcJwT8h+Vt+wn8eurLlh\nQrIfKHQOHHQOHf///////yH5BAEAAP8ALAAAAABuAIwAAAj/AP8JHDhQXjpz\n/PopXNiPn0OHDRMmbKhQIsOJFS1SxAhxI8SHFzVeDBnx48iNBAeeOkcxokeX\nFRdOnAlSokaaLXNujJkxo8iYHRkKtWkzZSsaOXkAWsoUECynsHgoqEW1qtVa\n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\nGg4lOnRGDKRZsoS7pMPSA6YXNWLsKJLkSZOVwKhMGSTTrJf9ZNKcomXKTrQY\nevr02cSIvKJxi6aJkaVuXaZMs1ziO5UqPawnuXK9AWEW2Jhja9pMuzMd27YW\nLNga10fuZYUPkdZdqpTv575YbJQbkCHw1sEpb9wQMstwWLFkbfppjJPc/wTI\nhHhJ5r0BBGbMRzfb7ez5MwwbpTMsx5pa9eob2CBM5yETpmzGtTE8hrybN29b\nc1oBn6trc9K7nhmUy6BcOUrn0KHLcr0FQvWYMxdnb3w7t/fvwFMiFvKG0uw8\n4kRLYjkGG0RtMPlWc+GGdyCwbwtYrOsHu7K0a+K/AEO04K0CF8InBvPOg2GE\nKpZTrsHSUotwwgnnmW4LHGGBKbb9bMqhsSly082CW0QMkDLLSvQHFQFiOESX\nLGzQpkUY22swA8Lko9EFLqfBEcdvMhRrwx610OLHtJ5Rc01ahHnCzTeFkXNO\nOfWQkwQ6NNFzTz2X0GQJQAMVdJEYsBhBAyrbK/9tgBcbrCTCG7bkkstvvvwm\nzPzI7JEcNLXDCYICQhXVkAIMMdWQd0x1Y9VdiuHGA1hjhfWQQzyg9dZDYmBg\nyioSVfRKFwfYZ8ZIJ3XhGhe83OLSSwEZU78ea+pUO2wK8MFaUUMl9dReDOll\n1VXbuYIZWWOl1dZDLpGhV3YZXLTR9vZhUMJijUX2mmveYRZcQDLlsCZOp21s\nCx+uLTjbbE/11ttv3diFkSHKRReGcthtN1hgrdxH2Awk5fJefK+ZZ9lvVvXW\n2cT+ZSwHgdHCpmCYDb4WYVNL7baXbsN9FdYYbKDA4otddBdYeffZx9iPjw35\nmmlKNtnUfmXSNNqAW9b/6eWYY8YWYW0V7tYQhxWAwwege61y6OXkbdDoSUFe\nWuR3wP3akKhjUtlHlqklG+YqsjaY620VNgQDMcQQouwrX3zR6KKFZfttyKtw\n+utQnRUL2mjLYjnvtLDpu9e9/ZYZ8FK3maLwwn8OmlF3lWNc7df3gfzteaZZ\n+NTKx5y6RxJ69/333mvBwHOLQ/fhiR2SV34HS47hmnAafJ9gh3AaDMcB7LE/\nIoPY441dhOzDz94VN3DPNmoeM5drAyfK7lWH34baYetVCidBIT6C5UMhB4r2\nn3FheSANRVGCwhBmObtlbgqXyYYNyuYFAMQFCtPwQf3spxAraGBRR+Af91wX\n/zsPoCIuCCAV13yAMsWo7zIOaJHFSHEZHZABdWK4X0JoIAENLIeDCXFA2rgX\nuwG8MC6kKGGoZuaDTEhtd/vBTBoyYLYqeAEzFpihGCagEBqIQQJVGMAOEdLD\n2L0uHJdBAMIOhsTELHExwLnS/i6zAQlIQItWxKIccejGL/4wjPvw4kHSQApA\nBhKQUDCiEWE2C93dTSEW2EMjaWABhbgnA3g8SAj4cElK+kMJWoyjBK6YECtw\nUgKZ7N8ejdZHfzjgGgNY5SpnZsisJXFHikwICTLBskzUECFtxJ/FFKKETmrx\nkwixQiclYAX+mfKUCpnBEZzpzHpkS2Yxm0ViMNcjhf+QABs5uKUuD9KoTOaP\nQb80picxaExk8lCZfIxLNuBhrWnurZpjoiVCbAkBbnrTH2pbTjgZVAVyGnOY\nBylmJ9P5xXWOUS6WEB3ZqgmTazLxMk40WntQub3lbIOc7OjkQP1RUI4e9CCl\nfJ3jjCbEogDAE6KrAiKlVs+4gJF7GUDlDLLnUWCyg6Ps8GgxdyrSVK5zH/WI\noARjZjFEQhSmRCEFg9SGSqIoQadT7alOJcAOoJJUmeFA6VBIETqk+ssPKizK\nDorxwx9CdShSvapOqzpVoO7ApMocgAdcIb74HeSroEOqEn8w1mgVRR0KyEEw\nKqoctTZEquzggFsVooepskP/DwqZAAfmakpGvc4HXSXF54CWVLthALASRYhB\nFpmDd4QxsQxRQmNd61HITnWyCVHC9MTnCsY9U7dH4AM8spGQvVrsiRB4Fg/8\ncFxsJmQDHvUHLQyhWsy01rXs2MFj2ZGC6862KKRgHGY6K9zlEPdyP8AJcteo\n3ClsQCHq0AF0QdkN+HbjlxygL31hO13tMrW7lwkB0BiUoR3x4EfmrYlCNjAF\nCRAoIWmwQexQqQcyxHe+9eXAfVOQAg7k16v7jQsAHGi2Bv0gUzyQQ05Ga+Cy\n0MBEDsZgN8gQ4QnXt7oJ0QOGOZACDTeEu0aTCwC80EKhDcAHMDGHWATMsuMC\nFsVl/9GnP0Jg0kw24MUv/qUTOGDlCj8WETfGsVx2vI+UzsATIFZUaTIRk3QY\n+ZYlFq0Ce5QJHBXgdU+MRCSwEYlVBCHPQZhyn7vhhD9fWdAc2DKhKXxhRCc6\n0Yi4LOPcl6hGVUFqc4gJLGaxufKO1s2VkrOj63znOkciCKMedZ+n7ARUp1rQ\niLAyIlyNYURcONaInrWs9ci4JyJOaFYawDzP8Q+ZwAICLckbgd08i290eh9V\nCIadQw3qO5Oa1H1GNRlSjeorO2HLruZ2rLudAm+Dm9Gxcx/GXmSIMbnjH5W2\nzy2RbOzM+cENBRAWs0N9b3zXWdp8pra1r61tbXdb4N/2Nv8i5gzeIJd5Gjui\nwT+AzQ9YVGrYnNO0Agm27GBkvNnNzje+921qf/+b1QEfuMDFPe5lk/lspUG3\nWKbQCofLBBBuwNEs3C3aikcrB2TTeM81HgmOd3zf/PZ3yFPNaqSXfODF0EDK\nE9e6liZmCvJwOLD7AQhU2efSbG6zm7VgiG1ofBc+//nGgZ7vbYw67aVux4v/\nfXSSK53by/HVrzIwDZTBBANUrzpMeAAIWASeB4P/AQ9+cHjEJx7xWgDE5nLQ\neMdHXvKbg/zkMZ23H/1oFRjYPOc9v3nQ58Aw0xn9LACvO7HQAOZVf/jl0ii1\nHcXe9bPX3euftaPL5R71tIf97nsy7/o0WlP2r4/JOU7B+r5nqva7jz1EdZ97\n4qNe+bonfvCfVXvly1762beOOdLBd+Q7PCAAOw==\n",
            "alt" => "Rails logo"
        ];
        $custom_collection->save();
    }

    /**

     *
     * @return void
     */
    public function test_14(): void
    {
        $this->mockTransportRequests([
            new MockRequest(
                $this->buildMockHttpResponse(200, json_encode(
                  ["custom_collection" => ["updated_at" => "2024-01-02T09:30:17-05:00", "id" => 841564295, "title" => "IPods", "handle" => "ipods", "body_html" => "<p>The best selling ipod ever</p>", "published_at" => "2008-02-01T19:00:00-05:00", "sort_order" => "manual", "template_suffix" => null, "published_scope" => "web", "admin_graphql_api_id" => "gid://shopify/Collection/841564295", "image" => ["alt" => "Rails logo", "created_at" => "2024-01-02T09:30:16-05:00", "width" => 110, "height" => 140, "src" => "https://cdn.shopify.com/s/files/1/0005/4838/0009/collections/rails_logo20240102-28582-3dbsyd.gif?v=1704205817"]]]
                )),
                "https://test-shop.myshopify.io/admin/api/2024-07/custom_collections/841564295.json",
                "PUT",
                null,
                [
                    "X-Shopify-Access-Token: this_is_a_test_token",
                ],
                json_encode(["custom_collection" => ["image" => ["alt" => "Rails logo"]]]),
            ),
        ]);

        $custom_collection = new CustomCollection($this->test_session);
        $custom_collection->id = 841564295;
        $custom_collection->image = [
            "alt" => "Rails logo"
        ];
        $custom_collection->save();
    }

    /**

     *
     * @return void
     */
    public function test_15(): void
    {
        $this->mockTransportRequests([
            new MockRequest(
                $this->buildMockHttpResponse(200, json_encode(
                  ["custom_collection" => ["body_html" => "<p>5000 songs in your pocket</p>", "title" => "IPods", "handle" => "ipods", "id" => 841564295, "updated_at" => "2024-01-02T09:30:27-05:00", "published_at" => "2008-02-01T19:00:00-05:00", "sort_order" => "manual", "template_suffix" => null, "published_scope" => "web", "admin_graphql_api_id" => "gid://shopify/Collection/841564295", "image" => ["created_at" => "2024-01-02T09:28:43-05:00", "alt" => "MP3 Player 8gb", "width" => 123, "height" => 456, "src" => "https://cdn.shopify.com/s/files/1/0005/4838/0009/collections/ipod_nano_8gb.jpg?v=1704205723"]]]
                )),
                "https://test-shop.myshopify.io/admin/api/2024-07/custom_collections/841564295.json",
                "PUT",
                null,
                [
                    "X-Shopify-Access-Token: this_is_a_test_token",
                ],
                json_encode(["custom_collection" => ["body_html" => "<p>5000 songs in your pocket</p>"]]),
            ),
        ]);

        $custom_collection = new CustomCollection($this->test_session);
        $custom_collection->id = 841564295;
        $custom_collection->body_html = "<p>5000 songs in your pocket</p>";
        $custom_collection->save();
    }

    /**

     *
     * @return void
     */
    public function test_16(): void
    {
        $this->mockTransportRequests([
            new MockRequest(
                $this->buildMockHttpResponse(200, json_encode(
                  []
                )),
                "https://test-shop.myshopify.io/admin/api/2024-07/custom_collections/841564295.json",
                "DELETE",
                null,
                [
                    "X-Shopify-Access-Token: this_is_a_test_token",
                ],
            ),
        ]);

        CustomCollection::delete(
            $this->test_session,
            841564295,
            [],
            [],
        );
    }

    /**

     *
     * @return void
     */
    public function test_17(): void
    {
        $this->mockTransportRequests([
            new MockRequest(
                $this->buildMockHttpResponse(200, json_encode(
                  ["custom_collection" => ["id" => 1063001330, "handle" => "ipods-1", "title" => "IPods", "updated_at" => "2024-01-02T09:30:23-05:00", "body_html" => null, "published_at" => "2024-01-02T09:30:23-05:00", "sort_order" => "best-selling", "template_suffix" => null, "published_scope" => "web", "admin_graphql_api_id" => "gid://shopify/Collection/1063001330"]]
                )),
                "https://test-shop.myshopify.io/admin/api/2024-07/custom_collections.json",
                "POST",
                null,
                [
                    "X-Shopify-Access-Token: this_is_a_test_token",
                ],
                json_encode(["custom_collection" => ["title" => "IPods", "collects" => [["product_id" => 921728736]]]]),
            ),
        ]);

        $custom_collection = new CustomCollection($this->test_session);
        $custom_collection->title = "IPods";
        $custom_collection->collects = [
            [
                "product_id" => 921728736
            ]
        ];
        $custom_collection->save();
    }

    /**

     *
     * @return void
     */
    public function test_18(): void
    {
        $this->mockTransportRequests([
            new MockRequest(
                $this->buildMockHttpResponse(200, json_encode(
                  ["custom_collection" => ["id" => 1063001335, "handle" => "macbooks", "title" => "Macbooks", "updated_at" => "2024-01-02T09:30:31-05:00", "body_html" => null, "published_at" => "2024-01-02T09:30:31-05:00", "sort_order" => "best-selling", "template_suffix" => null, "published_scope" => "web", "admin_graphql_api_id" => "gid://shopify/Collection/1063001335"]]
                )),
                "https://test-shop.myshopify.io/admin/api/2024-07/custom_collections.json",
                "POST",
                null,
                [
                    "X-Shopify-Access-Token: this_is_a_test_token",
                ],
                json_encode(["custom_collection" => ["title" => "Macbooks"]]),
            ),
        ]);

        $custom_collection = new CustomCollection($this->test_session);
        $custom_collection->title = "Macbooks";
        $custom_collection->save();
    }

    /**

     *
     * @return void
     */
    public function test_19(): void
    {
        $this->mockTransportRequests([
            new MockRequest(
                $this->buildMockHttpResponse(200, json_encode(
                  ["custom_collection" => ["id" => 1063001340, "handle" => "macbooks", "title" => "Macbooks", "updated_at" => "2024-01-02T09:30:44-05:00", "body_html" => null, "published_at" => "2024-01-02T09:30:44-05:00", "sort_order" => "best-selling", "template_suffix" => null, "published_scope" => "web", "admin_graphql_api_id" => "gid://shopify/Collection/1063001340"]]
                )),
                "https://test-shop.myshopify.io/admin/api/2024-07/custom_collections.json",
                "POST",
                null,
                [
                    "X-Shopify-Access-Token: this_is_a_test_token",
                ],
                json_encode(["custom_collection" => ["title" => "Macbooks", "metafields" => [["key" => "new", "value" => "newvalue", "type" => "single_line_text_field", "namespace" => "global"]]]]),
            ),
        ]);

        $custom_collection = new CustomCollection($this->test_session);
        $custom_collection->title = "Macbooks";
        $custom_collection->metafields = [
            [
                "key" => "new",
                "value" => "newvalue",
                "type" => "single_line_text_field",
                "namespace" => "global"
            ]
        ];
        $custom_collection->save();
    }

    /**

     *
     * @return void
     */
    public function test_20(): void
    {
        $this->mockTransportRequests([
            new MockRequest(
                $this->buildMockHttpResponse(200, json_encode(
                  ["custom_collection" => ["id" => 1063001338, "handle" => "macbooks", "title" => "Macbooks", "updated_at" => "2024-01-02T09:30:34-05:00", "body_html" => null, "published_at" => "2024-01-02T09:30:34-05:00", "sort_order" => "best-selling", "template_suffix" => null, "published_scope" => "web", "admin_graphql_api_id" => "gid://shopify/Collection/1063001338", "image" => ["created_at" => "2024-01-02T09:30:34-05:00", "alt" => "Rails Logo", "width" => 110, "height" => 140, "src" => "https://cdn.shopify.com/s/files/1/0005/4838/0009/collections/rails_logo20240102-28582-cm2doy.gif?v=1704205834"]]]
                )),
                "https://test-shop.myshopify.io/admin/api/2024-07/custom_collections.json",
                "POST",
                null,
                [
                    "X-Shopify-Access-Token: this_is_a_test_token",
                ],
                json_encode(["custom_collection" => ["title" => "Macbooks", "image" => ["src" => "http://example.com/rails_logo.gif", "alt" => "Rails Logo"]]]),
            ),
        ]);

        $custom_collection = new CustomCollection($this->test_session);
        $custom_collection->title = "Macbooks";
        $custom_collection->image = [
            "src" => "http://example.com/rails_logo.gif",
            "alt" => "Rails Logo"
        ];
        $custom_collection->save();
    }

    /**

     *
     * @return void
     */
    public function test_21(): void
    {
        $this->mockTransportRequests([
            new MockRequest(
                $this->buildMockHttpResponse(200, json_encode(
                  ["custom_collection" => ["id" => 1063001329, "handle" => "macbooks", "title" => "Macbooks", "updated_at" => "2024-01-02T09:30:19-05:00", "body_html" => null, "published_at" => null, "sort_order" => "best-selling", "template_suffix" => null, "published_scope" => "web", "admin_graphql_api_id" => "gid://shopify/Collection/1063001329"]]
                )),
                "https://test-shop.myshopify.io/admin/api/2024-07/custom_collections.json",
                "POST",
                null,
                [
                    "X-Shopify-Access-Token: this_is_a_test_token",
                ],
                json_encode(["custom_collection" => ["title" => "Macbooks", "published" => false]]),
            ),
        ]);

        $custom_collection = new CustomCollection($this->test_session);
        $custom_collection->title = "Macbooks";
        $custom_collection->published = false;
        $custom_collection->save();
    }

}
