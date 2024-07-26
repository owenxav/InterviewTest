def merge_dictionaries(dict1, dict2):
    merged_dict = dict1.copy()
    merged_dict.update(dict2)
    return merged_dict

# Example usage:
dict1 = {'a': 1, 'b': 2, 'c': 3}
dict2 = {'b': 4, 'd': 5}
print(merge_dictionaries(dict1, dict2))
# Output: {'a': 1, 'b': 4, 'c': 3, 'd': 5}
