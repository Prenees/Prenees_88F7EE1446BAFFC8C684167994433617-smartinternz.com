def linear_search_product(products, target_product):
    indices = []
    for index, product in enumerate(products):
        if product == target_product:
            indices.append(index)
    return indices

# Example usage:
product_list = ["Apple", "Banana", "Apple", "Orange", "Apple"]
target = "Apple"
result = linear_search_product(product_list, target)
print("Indices of", target, "in the list:", result)
